#!C:/xampp/htdocs/Python/
#!C:/xampp/htdocs/Python/Scripts/
#C:/xampp/htdocs/Python/Lib/site-packages/
import pandas as pd
from sklearn.model_selection import train_test_split # Import train_test_split function
from sklearn.linear_model import Ridge
from sklearn.linear_model import Lasso
from sklearn.metrics import mean_squared_error
import numpy as np
import sys
data = pd.read_csv('aftercleaningsolupdated.csv')
#print(data.head())
locat=pd.get_dummies(data['Location'])
#print(locat)
labels = data['Price']
attribute = data.drop(['Price','Brand New','Location'],axis=1)
attribute =pd.concat([attribute,locat],axis=1)
#print(attribute)
x_train, x_test , y_train , y_test = train_test_split(attribute , labels , test_size=0.2, random_state=200)
model_lasso = Lasso(alpha=0.005,random_state=None,positive=True,fit_intercept=False)
#model_lasso =Lasso([.5,10])
model_lasso.fit(x_train,y_train)
#print('lasso regression',model_lasso.score(x_test,y_test))

if ((sys.argv[1]=='Bahria-Town') or (sys.argv[1]=='Baldia-Town')):
    fbr_rate=12000;

if ((sys.argv[1]=='Buffer-Zone') or (sys.argv[1]=='Delhi-Colony') or (sys.argv[1]=='Baloch-Colony') or (sys.argv[1]=='Malir-Cantonment')
    or (sys.argv[1]=='Model-Colony') or (sys.argv[1]=='Shah-Faisal-Town')):
    fbr_rate=13200;

if ((sys.argv[1]=='Bin-Qasim-Town') or (sys.argv[1]=='Cattle-colony') or (sys.argv[1]=='Korangi') or (sys.argv[1]=='Liaqatabad')
    or (sys.argv[1]=='Malir-City') or (sys.argv[1]=='Orangi-Town') or (sys.argv[1]=='Shah-Faisal-Colony')):
    fbr_rate=4800;

if ((sys.argv[1]=='Clifton') or (sys.argv[1]=='DHA-(Defence)') or (sys.argv[1]=='DHA-Phase-1')
    or (sys.argv[1]=='DHA-Phase-2') or (sys.argv[1]=='DHA-Phase-4') or (sys.argv[1]=='DHA-Phase-5')
    or (sys.argv[1]=='DHA-Phase-6') or (sys.argv[1]=='DHA-Phase-7') or (sys.argv[1]=='DHA-Phase-8')
    or (sys.argv[1]=='Gulshan-e-Iqbal-Block-17') or (sys.argv[1]=='KDA') or (sys.argv[1]=='PECHS')
    or (sys.argv[1]=='Sindhi-Muslim-Society')):
    fbr_rate=48000;
if ((sys.argv[1]=='Federal-B-Area') or (sys.argv[1]=='Gulistan-e-Jauhar') or
    (sys.argv[1]=='Gulistan-e-Jauhar-15') or (sys.argv[1]=='Gulistan-e-Jauhar-12')
    or (sys.argv[1]=='Gulshan-e-Iqbal') or (sys.argv[1]=='Gulshan-e-Iqbal-Block-1')
    or (sys.argv[1]=='Gulshan-e-Iqbal-Block-2') or (sys.argv[1]=='Gulshan-e-Iqbal-Block-3')
    or (sys.argv[1]=='Gulshan-e-Iqbal-Block-4') or (sys.argv[1]=='Gulshan-e-Iqbal-Block-5')
    or (sys.argv[1]=='Gulshan-e-Iqbal-Block-13D') or (sys.argv[1]=='Gulshan-e-Jamal')
    or (sys.argv[1]=='Nazimabad')
    or (sys.argv[1]=='North-Nazimabad')
    or (sys.argv[1]=='North-Nazimabad-block-pqst')):
    fbr_rate=24000;
if ((sys.argv[1]=='Gulistan-e-Faisal') or (sys.argv[1]=='Gulshan-e-Iqbal-Block-7') or (sys.argv[1]=='Jamshed-Quarter')
    or (sys.argv[1]=='M.A.Jinnah-Road') or  (sys.argv[1]=='Shahra-e-Faisal')):
    fbr_rate=38400;
if ((sys.argv[1]=='Gulshan-e-Hadeed') or (sys.argv[1]=='Gulshan-e-Maymar') or (sys.argv[1]=='Landhi') or
    (sys.argv[1]=='North-Karachi') or (sys.argv[1]=='Scheme-33')):
    fbr_rate=7200;
if ((sys.argv[1]=='Shah-Latif-Town') or (sys.argv[1]=='Surjani-Town')):
    fbr_rate=3600;


if (sys.argv[3]=='Square-feet'):
    area=(float(sys.argv[2])/9)

elif (sys.argv[3]=='Marla'):
    area=(float(sys.argv[2])*30.25)

elif (sys.argv[3]=='Square-Meters'):
    area=(float(sys.argv[2])*1.196)

elif (sys.argv[3]=='Kanal'):
    area=(float(sys.argv[2])*605)

else:
    area=float((sys.argv[2]))


badroom=int(sys.argv[4])
bathroom=int(sys.argv[5])
kitchen=int(sys.argv[6])
parking_spot=int(sys.argv[7])
no_of_gardens=int(sys.argv[8])
servant_quarter=int(sys.argv[9])
swimming_pool=int(sys.argv[10])
powder_room=int(sys.argv[11])
power_backup=int(sys.argv[12])
gated_society=int(sys.argv[13])
society_security=int(sys.argv[14])
lane_security=int(sys.argv[15])
year_of_construction=int(sys.argv[16])
no_of_stories=int(sys.argv[17])
furnished=int(sys.argv[18])
bahria_town=0
baldia_town=0
baloch_colony=0
bin_qasim_town=0
buffer_zone=0
cattle_colony=0
clifton=0
dha=0
dha_phase_1=0
dha_phase_2=0
dha_phase_4=0
dha_phase_5=0
dha_phase_6=0
dha_phase_7=0
dha_phase_8=0
delhi_colony=0
federal_b_area=0
gulistan_e_faisal=0
gulistan_e_jauhar=0
gulistan_e_jauhar_12=0
gulistan_e_jauhar_15=0
gulshan_iqbal_4=0
gulshan_e_hadeed=0
gulshan_e_iqbal=0
gulshan_e_iqbal_1=0
gulshan_e_iqbal_13=0
gulshan_e_iqbal_13D=0
gulshan_e_iqbal_17=0
gulshan_e_iqbal_2=0
gulshan_e_iqbal_3=0
gulshan_e_iqbal_4=0
gulshan_e_iqbal_5=0
gulshan_e_iqbal_6=0
gulshan_e_iqbal_7=0
gulshan_e_jamal=0
gulshan_e_maymar=0
jamshed_quarter=0
kda=0
korangi=0
landhi=0
liaqatabad=0
ma_jinnah_road=0
malir_cantonment=0
malir_city=0
model_colony=0
nazimabad=0
north_karachi=0
north_nazimabad=0
north_nazimabad_block_pqst=0
orangi_town=0
pakistan_employees_cooperative_housing_society=0
scheme_33=0
shah_faisal_colony=0
shah_faisal_town=0
shah_latif_town=0
shahra_e_faisal=0
sindhi_muslim_society=0
surjani_town=0


if (sys.argv[1]=='Bahria-Town'):
    bahria_town=1

if (sys.argv[1]=='Baldia-Town'):
    baldia_town=1
    
if (sys.argv[1]=='Baloch-Colony'):
    baloch_colony=1

if (sys.argv[1]=='Bin-Qasim-Town'):
    bin_qasim_town=1


if (sys.argv[1]=='Buffer-Zone'):
    buffer_zone=1
if (sys.argv[1]=='Cattle-colony'):
    cattle_colony=1
if (sys.argv[1]=='Clifton'):
    clifton=1
if (sys.argv[1]=='DHA-(Defence)'):
    dha=1
if (sys.argv[1]=='DHA-Phase-1'):
    dha_phase_1=1
if (sys.argv[1]=='DHA-Phase-2'):
    dha_phase_2=1
if (sys.argv[1]=='DHA-Phase-4'):
    dha_phase_4=1
if (sys.argv[1]=='DHA-Phase-5'):
    dha_phase_5=1
if (sys.argv[1]=='DHA-Phase-6'):
    dha_phase_6=1
if (sys.argv[1]=='DHA-Phase-7'):
    dha_phase_7=1
if (sys.argv[1]=='DHA-Phase-8'):
    dha_phase_8=1
if (sys.argv[1]=='Delhi-Colony'):
    delhi_colony=1
if (sys.argv[1]=='Federal-B-Area'):
    federal_b_area=1
if (sys.argv[1]=='Gulistan-e-Faisal'):
    gulistan_e_faisal=1
if (sys.argv[1]=='Gulistan-e-Jauhar'):
    gulistan_e_jauhar=1
if (sys.argv[1]=='Gulistan-e-Jauhar-12'):
    gulistan_e_jauhar_12=1
if (sys.argv[1]=='Gulistan-e-Jauhar-15'):
    gulistan_e_jauhar_15=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-4'):
    gulshan_e_iqbal_4=1
if (sys.argv[1]=='Gulshan-e-Hadeed'):
    gulshan_e_hadeed=1
if (sys.argv[1]=='Gulshan-e-Iqbal'):
    gulshan_e_iqbal=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-1'):
    gulshan_e_iqbal_1=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-13'):
    gulshan_e_iqbal_13=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-13D'):
    gulshan_e_iqbal_13D=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-17'):
    gulshan_e_iqbal_17=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-2'):
    gulshan_e_iqbal_2=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-3'):
    gulshan_e_iqbal_3=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-4'):
    gulshan_e_iqbal_4=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-5'):
    gulshan_e_iqbal_5=1

if (sys.argv[1]=='Gulshan-e-Iqbal-Block-6'):
    gulshan_e_iqbal_6=1
if (sys.argv[1]=='Gulshan-e-Iqbal-Block-7'):
    gulshan_e_iqbal_7=1
if (sys.argv[1]=='Gulshan-e-Jamal'):
    gulshan_e_jamal=1
if (sys.argv[1]=='Gulshan-e-Maymar'):
    gulshan_e_maymar=1
if (sys.argv[1]=='Jamshed-Quarter'):
    jamshed_quarter=1
if (sys.argv[1]=='KDA'):
    kda=1
if (sys.argv[1]=='Korangi'):
    korangi=1
if (sys.argv[1]=='Landhi'):
    landhi=1
if (sys.argv[1]=='Liaqatabad'):
    liaqatabad=1
if (sys.argv[1]=='M.A.Jinnah-Road'):
    ma_jinnah_road=1
if (sys.argv[1]=='Malir-Cantonment'):
    malir_cantonment=1
if (sys.argv[1]=='Malir-City'):
    malir_city=1
if (sys.argv[1]=='Model-Colony'):
    model_colony=1
if (sys.argv[1]=='Nazimabad'):
    nazimabad=1
if (sys.argv[1]=='North-Karachi'):
    north_karachi=1
if (sys.argv[1]=='North-Nazimabad'):
    north_nazimabad=1
if (sys.argv[1]=='North-Nazimabad-block-pqst'):
    north_nazimabad_block_pqst=1
if (sys.argv[1]=='Orangi-Town'):
    orangi_town=1
if (sys.argv[1]=='PECHS'):
    pakistan_employees_cooperative_housing_society=1
if (sys.argv[1]=='Scheme-33'):
    scheme_33=1
if (sys.argv[1]=='Shah-Faisal-Colony'):
    shah_faisal_colony=1
if (sys.argv[1]=='Shah-Faisal-Town'):
    shah_faisal_town=1
if (sys.argv[1]=='Shah-Latif-Town'):
    shah_latif_town=1
if (sys.argv[1]=='Shahra-e-Faisal'):
    shahra_e_faisal=1
if (sys.argv[1]=='Sindhi-Muslim-Society'):
    sindhi_muslim_society=1
if (sys.argv[1]=='Surjani-Town'):
    surjani_town=1


prid=model_lasso.predict([[fbr_rate,area,badroom,bathroom,kitchen,parking_spot,
no_of_gardens,servant_quarter,swimming_pool,powder_room
,power_backup,gated_society, society_security,lane_security,year_of_construction,
no_of_stories,furnished,bahria_town,baldia_town,baloch_colony,bin_qasim_town,
 buffer_zone,cattle_colony,clifton,dha,dha_phase_1,dha_phase_2,dha_phase_4,
dha_phase_5,dha_phase_6,dha_phase_7,dha_phase_8,
 delhi_colony,federal_b_area,gulistan_e_faisal,gulistan_e_jauhar,gulistan_e_jauhar_12
,gulistan_e_jauhar_15,gulshan_e_hadeed,gulshan_e_iqbal,gulshan_e_iqbal_1,
gulshan_e_iqbal_13,gulshan_e_iqbal_13D,gulshan_e_iqbal_17,gulshan_e_iqbal_2,
gulshan_e_iqbal_3,gulshan_e_iqbal_4,gulshan_e_iqbal_5,gulshan_e_iqbal_6,
gulshan_e_iqbal_7,gulshan_e_jamal, gulshan_e_maymar, jamshed_quarter, kda,
 korangi, landhi, liaqatabad, ma_jinnah_road,malir_cantonment,malir_city,
model_colony,nazimabad,north_karachi,north_nazimabad,north_nazimabad_block_pqst,
 orangi_town, pakistan_employees_cooperative_housing_society,scheme_33,
shah_faisal_colony,shah_faisal_town,shah_latif_town,shahra_e_faisal,
sindhi_muslim_society,surjani_town]])


if (year_of_construction > 2020) or (year_of_construction <1970):
    prid=' '
else:
    print(float(prid))


