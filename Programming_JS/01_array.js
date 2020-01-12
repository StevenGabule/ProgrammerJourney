/*var sentence = "the quick brown fox jumped over the lazy dog";
var words = sentence.split(" ");
for(var i = 0; i < words.length; ++i) {
    console.log("Word " + i + ": " + words[i]);
}*/

/*function copy(arr1, arr2) {
    for(var i = 0; i < arr1.length;++i) {
        arr2[i] = arr1[i];
    }
}
var nums = [];
for(var i = 0; i < 100; ++i) {
    nums[i] = i+1;
}
var samenums = [];
copy(nums, samenums);
nums[0] = 400;
console.log(samenums[0]);*/
/*var names = ["David", "Cynthia", "Raymond", "Clayton", "Jennifer"];
// putstr("Enter a name to search for: ");
// var name = readline();
var name = 1;
var position = names.indexOf(name);
if (position >= 0) {
    console.log("Found " + name + " at position " + position);
} else {
    console.log(name + " not found in array.");
}*/
/*var cisDept = ["Mike", "Clayton", "Terrill", "Danny", "Jennifer"];
var dmpDept = ["Raymond", "Cynthia", "Bryan"];
var itDiv = cisDept.concat(dmpDept);
console.log(itDiv.toString());*/

/*var nums = [2,3,4,5];
var newnums = 1;
var N = nums.length;
for(var i = N; i >= 0; --i) {
    nums[i] = nums[i-1];
}
nums[0] = newnums;
console.log(nums);
*/

var nums = [9,1,2,3,4,5];
for(var i = 0; i < nums.length; ++i) {
    nums[i] = nums[i+1];
}
console.log(nums);

var nums = [3,1,2,100,4,200];
nums.sort();
console.log(nums); // 1,100,2,200,3,4

function compare(num1,num2) {
    return num1 - num2;
}
var nums = [3,1,2,100,4,200];
nums.sort(compare);
console.log(nums); 

function square(num) {
    console.log(num, num * num);
}
var nums = [1,2,3,4,5,6,7,8,9,10];
nums.forEach(square);

function isEven(num) {
    return num % 2 == 0;
}

var nums = [2,4,6,8,10];
var even = nums.every(isEven);
if(even) {
    console.log("all numbers are even");
} else {
    console.log("not all numbers are even");
}

function isEven(num) {
    return num % 2 == 0;
}
var nums = [1,2,3,4,5,6,7,8,9,10];
var someEven = nums.some(isEven);
if (someEven) {
    console.log("some numbers are even");
} else {
    console.log("no numbers are even");
}
nums = [1,3,5,7,9];
someEven = nums.some(isEven);
if (someEven) {
    console.log("some numbers are even");
} else {
    console.log("no numbers are even");
}

function add(runningTotal, currentValue) {
    return runningTotal + currentValue;
}
var nums = [1,2,3,4,5,6,7,8,9,10];
var sum = nums.reduce(add);
console.log(sum); // displays 55


function curve(grade) {
    return grade += 5;
}
var grades = [77, 65, 81, 92, 83];
var newgrades = grades.map(curve);
console.log(newgrades); // 82, 70, 86, 97, 88

function isEven(num) {
return num % 2 == 0;
}
function isOdd(num) {
return num % 2 != 0;
}
var nums = [];
for (var i = 0; i < 20; ++i) {
nums[i] = i+1;
}
var evens = nums.filter(isEven);
console.log("Even numbers: ");
console.log(evens);
var odds = nums.filter(isOdd);
console.log("Odd numbers: ");
console.log(odds);

function compare(num1,num2) {
    return num1 - num2;
}

function passing(num) {
    return num >= 60;
}

var grades = [];

for (var i = 0; i < 20; ++i) {
    grades[i] = Math.floor(Math.random() * 101);
}

var passGrades = grades.filter(passing);
var sortGrades = passGrades.sort(compare);
console.log("All grades: ");
console.log(grades.toString());
console.log("Passing grades: ");
console.log(sortGrades.toString());

Array.matrix = function(numrows, numcols, initial) {
    var arr = [];
    for (var i = 0; i < numrows; ++i) {
        var columns = [];
        for (var j = 0; j < numcols; ++j) {
            columns[j] = initial;
        }
        arr[i] = columns;
    }
    return arr;
}

var nums = Array.matrix(5,5,0);
console.log(nums[1][1]); // displays 0
var names = Array.matrix(3,3,"");
names[1][2] = "Joe";
console.log(names[1][2]); // display "Joe"

var grades = [[89, 77, 78],[76, 82, 81],[91, 94, 89]];
var total = 0;
var average = 0.0;
for (var row = 0; row < grades.length; ++row) {
    for (var col = 0; col < grades[row].length; ++col) {
        total += grades[row][col];
    }
    average = total / grades[row].length;
    console.log("Student " + parseInt(row+1) + " average: " + average.toFixed(2));
    total = 0;
    average = 0.0;
}

var grades = [[89, 77, 78],[76, 82, 81],[91, 94, 89]];
var total = 0;
var average = 0.0;
for (var col = 0; col < grades.length; ++col) {
    for (var row = 0; row < grades[col].length; ++row) {
        total += grades[row][col];
    }
    average = total / grades[col].length;
    console.log("Test " + parseInt(col+1) + " average: " + average.toFixed(2));
    total = 0;
    average = 0.0;
}

var grades = [[89, 77],[76, 82, 81],[91, 94, 89, 99]];
var total = 0;
var average = 0.0;
for (var row = 0; row < grades.length; ++row) {
    for (var col = 0; col < grades[row].length; ++col) {
        total += grades[row][col];
    }
    average = total / grades[row].length;
    console.log("Student " + parseInt(row+1) + " average: " + average.toFixed(2));
    total = 0;
    average = 0.0;
}

    function Point(x,y) {
        this.x = x;
        this.y = y;
    }

    function displayPts(arr) {
        for (var i = 0; i < arr.length; ++i) {
            console.log(arr[i].x + ", " + arr[i].y);
        }
    }
    var p1 = new Point(1,2);
    var p2 = new Point(3,5);
    var p3 = new Point(2,8);
    var p4 = new Point(4,4);
    var points = [p1,p2,p3,p4];

    for (var i = 0; i < points.length; ++i) {
        console.log("Point " + parseInt(i+1) + ": " + points[i].x + ", " +
        points[i].y);
    }
        
    var p5 = new Point(12,-3);
    points.push(p5);

    console.log("After push: ");
    displayPts(points);
    points.shift();
    
    console.log("After shift: ");
    displayPts(points);

function weekTemps() {
    this.dataStore = [];
    this.add = add;
    this.average = average;
}

function add(temp) {
    this.dataStore.push(temp);
}

function average() {
    var total = 0;
    for (var i = 0; i < this.dataStore.length; ++i) {
        total += this.dataStore[i];
    }
    return total / this.dataStore.length;
}

var thisWeek = new weekTemps();
thisWeek.add(52);
thisWeek.add(55);
thisWeek.add(61);
thisWeek.add(65);
thisWeek.add(55);
thisWeek.add(50);
thisWeek.add(52);
thisWeek.add(49);
console.log(thisWeek.average()); // displays 54.875



