import requests, json, sys, datetime
import schedule
import time

def recolt():
    print("recolt")
    req_orders = requests.request('GET','https://NG1LYA1LNGJUGRACV4H5RVLLRHPYX9NC:@www.handinorme.com/api/orders/?display=full&filter[date_add]=[' + sys.argv[1]+ ']%&date=1&output_format=JSON')
    orders = req_orders.json()
    print(orders)
    for order in orders['orders']:
        to_push = {
        "date_add": order['date_add'],
        "date_upd": order['date_upd'],
        "total": order['total_paid'],
        "invoice_date": order['invoice_date'],
        "customer_gender": "zeaze",
        "is_order": order['valid'],
        "paiement_mode": order['payment']
        }
        req_post = requests.post('http://localhost:8080/carts',json=to_push)


    req_products = requests.request('GET','https://NG1LYA1LNGJUGRACV4H5RVLLRHPYX9NC:@www.handinorme.com/api/products/?display=full&date=1&output_format=JSON&limit=200')
    products = req_products.json()
    for product in products['products']:
        to_push = {
        "id_client": product["id"],
        "date_add": product['date_add'],
        "date_upd": product['date_upd'],
        "price": product['price'],
        "ean13": product['ean13'],
        "reference": product['reference'],
        "recolted_at": str(datetime.datetime.now()),
        "name":product['name']
        }
        req_post = requests.post('http://localhost:8080/products',json=to_push)

schedule.every(4).minutes.do(recolt)
while True:
    schedule.run_pending()
    time.sleep(1)