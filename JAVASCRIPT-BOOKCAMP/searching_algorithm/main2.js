function seqSearch(arr, data) {
    for( var i = 0; i < arr.length; ++i) {
        if(arr[i] == data && (arr.length * 0.2)) {
            swap(arr, i, 0);
            return true;
        } else if(arr[i] == data) {
            return true;
        }
    }
    return false;
}

function swap(arr, index, index1) {
    temp = arr[index];
    arr[index] = arr[index1];
    arr[index1] = temp;
}

function dispArr(arr) {
    for(var i = 0; i < arr.length; ++i) {
        putstr(arr[i] + " ");
        if(i % 10 == 9) {
            putstr("\n");
        }
    }
    if(i % 10 != 0) {
        putstr("\n");
    }
}


var nums = [];
for(var i = 0; i < 10; ++i) {
    nums[i] = Math.floor(Math.random() * 11);
}

dispArr(nums);
print();
putstr("Enter a value to search for: ");
var val = parseInt(readline());

if (seqSearch(nums, val)) {
    print("Found element: ");
    print();
    dispArr(nums);
} else {
    print(val + " is not in array.");
}

