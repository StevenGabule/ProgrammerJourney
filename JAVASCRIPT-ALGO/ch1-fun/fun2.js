/*
var sentence = "the quick brown fox jumped over the lazy dog";
var words = sentence.split(" ");
for (var i = 0; i < words.length; ++i) {
    console.log("word " + i + ": " + words[i]);
}
*/

/*function copy(arr1, arr2) {
    for (var i = 0; i < arr1.length; ++i) {
        arr2[i] = arr1[i];
    }
}

var nums = [];
for (var i = 0; i < 100; ++i) {
    nums[i] = i + 1;
}

var samenums = [];
copy(nums, samenums);
nums[0] = 400;
console.log(samenums[0]);*/

/*
// accessor functions
var names = ["David", "Cynthia", "Raymond", "Clayton", "Jennifer"];
var name = "Cynthia";
var position = names.indexOf(name);
if (position >= 0) {
    console.log("Found " + name + " at position " + position);
} else {
    console.log(name + " not found in array.");
}
*/

var nums = [2,3,4,5];
var newnum  = 1;
var N = nums.length;
for (var i = N; i >= 0; --i){
    nums[i]  = nums[i-1];
}
nums[0] = newnum;
console.log(nums); 




