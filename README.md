# Objective: Simplified bank

We have 2 types of users, common and merchants, both have a wallet with money and make transfers between them. Let’s pay attention only to the transfer flow between two users.

Requirements:

- For both types of users, we need the Full Name, CPF, email and Password. CPF/CNPJ and emails must be unique in the system. Therefore, your system must allow only one registration with the same CPF or email address.
- Users can send money (make transfers) to merchants and between users.
- Merchants only receive transfers, they do not send money to anyone.
- Validate if the user has balance before the transfer.
- Before finalizing the transfer, you must consult an external authorizer service, use this mock to simulate (https://run.mocky.io/v3/8fafdd68-a090-496f-8c9a-3442cf30dae6).
- The transfer operation must be a transaction (that is, reversed in any case of inconsistency) and the money must return to the wallet of the user who sends it.
- When receiving payment, the user or merchant needs to receive notification (email, sms) sent by a third party service and eventually this service may be unavailable/unstable. Use this mock to simulate sending (http://o4d9z.mocklab.io/notify).
- This service must be RESTFul.

# Payload

Make a proposal ❤️ of payload, if you prefer, we have an example here:

POST /transaction

```json
{
    "value": 100.00,
    "payer" : 4,
    "payee" : 15
}
```