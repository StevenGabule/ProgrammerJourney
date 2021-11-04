class ATM {
  constructor(records) {
    this.records = records;
  }
  loginPin(pin) {
    return this.records.find((record) => record.pin === pin);
  }
  retrieveBalance() {}
  sendMoney() {}
  openAccount() {}
  closeAccount() {}
  depositAmount() {}
}

const customerRecords = [
  {
    pin: 1,
    name: 'John Paul',
    balance: 2000,
    transactionHistory: [
      { Date: '11/3/2021, 1:44:32 PM', amount: 200, type: 'DEPOSIT' },
      { Date: '11/2/2021, 1:45:03 PM', amount: 1200, type: 'WITHDRAW' },
      { Date: '10/13/2021, 1:45:03 PM', amount: 2200, type: 'DEPOSIT' },
      { Date: '10/15/2021, 1:45:03 PM', amount: 2400, type: 'P-TO-P' },
    ],
  },
  {
    pin: 2,
    name: 'John Doe',
    balance: 10000,
    transactionHistory: [
      { Date: '11/3/2021, 1:44:32 PM', amount: 200 },
      { Date: '11/2/2021, 1:45:03 PM', amount: 1200 },
      { Date: '10/13/2021, 1:45:03 PM', amount: 2200 },
      { Date: '10/15/2021, 1:45:03 PM', amount: 2400 },
    ],
  },
  {
    pin: 3,
    name: 'Jane Doe',
    balance: 300,
    transactionHistory: [
      { Date: '11/3/2021, 1:44:32 PM', amount: 200 },
      { Date: '11/2/2021, 1:45:03 PM', amount: 1200 },
      { Date: '10/13/2021, 1:45:03 PM', amount: 2200 },
      { Date: '10/15/2021, 1:45:03 PM', amount: 2400 },
    ],
  },
];
const atm = new ATM(customerRecords);
const pin = 1;
const userLogged = atm.loginPin(pin);
console.log(userLogged);
