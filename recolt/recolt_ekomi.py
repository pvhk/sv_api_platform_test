import csv, requests, json
import schedule
import time

EKOMI_INTERFACE_ID = "62100"
EKOMI_INTERFACE_PWD = "21f867ad2ea2ab03f3cb5a47a"

# intertfaceID=$1
# interfacePWD=$2

#call api to get all reviews
#@timestamp,@clientid,@productId,@note,@avis

URL_EKOMI =  "http://api.ekomi.de/get_productfeedback.php?interface_id="+EKOMI_INTERFACE_ID+"&interface_pw="+EKOMI_INTERFACE_PWD+"&type=csv&filter=all"

req = requests.get(url = URL_EKOMI)

with requests.Session() as s:
    download = s.get(URL_EKOMI)

    decoded_content = download.content.decode('utf-8')

    cr = csv.reader(decoded_content.splitlines(), delimiter=',')
    my_list = list(cr)
    for row in my_list:
        review = {
            "product_id":row[2],
            "note":row[3],
            "text":row[4]
        }
        print(review)
        req_post = requests.post('http://localhost:8080/reviews',json=review)


while True:
    schedule.run_pending()
    time.sleep(1)