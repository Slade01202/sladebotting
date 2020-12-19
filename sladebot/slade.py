import requests #dependency
import json

url = "https://discord.com/api/webhooks/662392200163885057/qAAQY1CuQ39-g9jrHlVY3Z7QfuzFCkWWNz6VbWWt_VwnLYdpmYuEsPYyRadoIVuTy7b-"

data = {}
#for all params, see https://discordapp.com/developers/docs/resources/webhook#execute-webhook
data["content"] = "https://upload.wikimedia.org/wikipedia/commons/0/0b/Slade_-_TopPop_1973_19.png"
data["username"] = "Slade"

result = requests.post(url, data=json.dumps(data), headers={"Content-Type": "application/json"})

try:
    result.raise_for_status()
except requests.exceptions.HTTPError as err:
    print(err)
else:
    print("Payload delivered successfully, code {}.".format(result.status_code))