class ATM {

  constructor(records) {
    this.records = records;
  }

  loginPin(pin) {
    return this.records.find((record) => record.pin === pin); // COMPARE IF THE VALUE IS EXISTS
  }

  retrieveBalance(pin) {
    const record = this.records.find((record) => record.pin === pin);
    return record.balance;
  }

  sendMoney() {
  }

  openAccount() {
  }

  closeAccount() {
  }

  depositAmount() {
  }
}

const customerRecords = [
  {
    pin: 1,
    name: 'John Paul',
    balance: 2000,
    transactionHistory: [
      {Date: '11/3/2021, 1:44:32 PM', amount: 200, type: 'DEPOSIT'},
      {Date: '11/2/2021, 1:45:03 PM', amount: 1200, type: 'WITHDRAW'},
      {Date: '10/13/2021, 1:45:03 PM', amount: 2200, type: 'DEPOSIT'},
      {Date: '10/15/2021, 1:45:03 PM', amount: 2400, type: 'P-TO-P'},
    ],
  },
  {
    pin: 2,
    name: 'John Doe',
    balance: 10000,
    transactionHistory: [
      {Date: '11/3/2021, 1:44:32 PM', amount: 200},
      {Date: '11/2/2021, 1:45:03 PM', amount: 1200},
      {Date: '10/13/2021, 1:45:03 PM', amount: 2200},
      {Date: '10/15/2021, 1:45:03 PM', amount: 2400},
    ],
  },
  {
    pin: 3,
    name: 'Jane Doe',
    balance: 300,
    transactionHistory: [
      {Date: '11/3/2021, 1:44:32 PM', amount: 200},
      {Date: '11/2/2021, 1:45:03 PM', amount: 1200},
      {Date: '10/13/2021, 1:45:03 PM', amount: 2200},
      {Date: '10/15/2021, 1:45:03 PM', amount: 2400},
    ],
  },
];

// INITIALIZE THE CLASS
const atm = new ATM(customerRecords);
const pin = 1; // EX: USER INPUT
const userLogged = atm.loginPin(pin);

if (userLogged) {
  const menus = [
    'BALANCE',
    'WITHDRAW',
    'CLOSE ACCOUNT',
    'HISTORY',
    'DEPOSIT',
    'SEND MONEY',
  ];

  console.table([menus])

  const choose = 0;
  // retrieve current balance
  if (choose === 0) {
    const balance = atm.retrieveBalance(pin)
    console.table([["Current Balance: ", "PHP " + balance.toFixed(2)]])
  }
  // withdraw
  if (choose === 1) {
    const withdraw = 25000;
    if(withdraw <= userLogged.balance) {
      userLogged.balance = userLogged.balance - withdraw;
      userLogged.transactionHistory.unshift({
        Date: new Date().toLocaleString(), amount: withdraw, type: 'WITHDRAW'
      })
      const history = userLogged.transactionHistory;
      delete userLogged.transactionHistory
      console.table([userLogged])
      console.table(history)
    } else {
      console.log('INEFFICIENT AMOUNT!')
    }
  }
}
