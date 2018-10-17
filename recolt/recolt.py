import requests, json, sys

req = requests.request('GET','https://NG1LYA1LNGJUGRACV4H5RVLLRHPYX9NC:@www.handinorme.com/api/orders/?display=full&filter[date_add]=[' + sys.argv[1]+ ']%&date=1&output_format=JSON')

jsoned = req.json()
for order in jsoned['orders']:
    to_push = {
    "date_add": order['date_add'],
    "date_upd": order['date_upd'],
    "total": order['total_paid'],
    "invoice_date": order['invoice_date'],
    "customer_gender": "zeaze",
    "is_order": order['valid'],
    "paiement_mode": order['payment']
    }
    print(to_push)
    req_post = requests.post('http://localhost:8080/carts',json=to_push)
    print(req_post)

