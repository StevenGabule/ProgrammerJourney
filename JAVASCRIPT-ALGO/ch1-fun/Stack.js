/**
 * Created by John paul on 10/17/2018.
 */
function Stack() {
    this.dataStore = [];
    this.top = 0;
    this.push = push;
    this.pop = pop;
    this.peek = peek;
    this.clear = clear;
    this.length = length;
}

function push(element) {
    this.dataStore[this.top++] = element;
}

function pop() {
    return this.dataStore[--this.top];
}

function peek() {
    return this.dataStore[this.top - 1];
}

function length() {
    return this.top;
}

function clear() {
    this.top = 0;
}


// Example 4-4. Determining if a string is a palindrome
function isPalinDrome(word) {
    var s = new Stack();
    for (var i = 0; i < word.length; ++i) {
        s.push(word[i]);
    }
    var rword = "";
    while (s.length() > 0) {
        rword += s.pop();
    }
    return word === rword;
}

var word = "hello";
if (isPalinDrome(word)) {
    console.log(word + " is a palindrome.");
} else {
    console.log(word + " is not a palindrome.");
}

word = "racecar";
if (isPalinDrome(word)) {
    console.log(word + " is a palindrome.");
} else {
    console.log(word + " is not a palindrome.");
}

// Example 4-3. Converting numbers to base 2 and base 8
/*function mulBase(num, base) {
 var s = new Stack();
 do {
 s.push(num % base);
 num = Math.floor(num /= base);
 } while (num > 0);
 var converted = "";
 while (s.length() > 0) {
 converted += s.pop();
 }
 return converted;
 }

 var Num = 32, Base = 2;
 var newNum = mulBase(Num, Base);
 console.log(Num + " converted to base " + Base + " is " + newNum);

 var Num = 125, Base = 8;
 var newNum = mulBase(Num, Base);
 console.log(Num + " converted to base " + Base + " is " + newNum);*/

/*
 var s = new Stack();
 s.push("David");
 s.push("Raymond");
 s.push("Bryan");
 console.log("length: " + s.length());
 console.log(s.peek());

 var popped = s.pop();
 console.log("The popped element is: " + popped);
 console.log(s.peek());
 s.push("Cynthia");
 console.log(s.peek());
 s.clear();

 console.log("length: " + s.length());
 console.log(s.peek());
 s.push("Clayton");
 console.log(s.peek());*/
function Queue() {
    this.dataStore = [];
    this.enqueue = enqueue;
    this.dequeue = dequeue;
    this.front = front;
    this.back = back;
    this.toString = toString;
    this.empty = empty;
}
function enqueue(element) {
    this.dataStore.push(element);
}
function dequeue() {
    return this.dataStore.shift();
}
function front() {
    return this.dataStore[0];
}
function back() {
    return this.dataStore[this.dataStore.length - 1];
}
function toString() {
    var retStr = "";
    for (var i = 0; i < this.dataStore.length; ++i) {
        retStr += this.dataStore[i] + "\n";
    }
    return retStr;
}
function empty() {
    if (this.dataStore.length === 0) {
        return true;
    } else {
        return false;
    }
}
function distribute(nums, queues, n, digits) {
    for (var i = 0; i < n; ++i) {
        if (digits === 1) {
            queues[nums[i] % 10].enqueue(nums[i]);
        } else {
            queues[Math.floor(nums[i] / 10)].enqueue(nums[i]);
        }
    }
}

function collect(queues, nums) {
    var i = 0;
    for (var digit = 0; digit < 10; ++digit) {
        while (!queues[digit].empty()) {
            nums[i++] = queues[digit].dequeue();
        }
    }
}

function dispArray(arr) {
    for (var i = 0; i < arr.length; ++i) {
        console.log(arr[i] + " ");
    }
}

// main program
var queues = [];
for (var i = 0; i < 10; ++i) {
    queues[i] = new Queue();
}
var nums = [];
for (var i = 0; i < 10; ++i) {
    nums[i] = Math.floor(Math.floor(Math.random() * 101));
}
console.log("Before radix sort: ");
dispArray(nums);
distribute(nums, queues, 10, 1);
collect(queues, nums);
distribute(nums, queues, 10, 10);
collect(queues, nums);
console.log("\n\nAfter radix sort: ");
dispArray(nums);







