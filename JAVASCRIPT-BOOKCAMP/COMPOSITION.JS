function sum(x,y) {	return x + y; }

function mult(x,y) { return x * y; }

function compose2(fn1, fn2) {
	return function comp() {
		var args = [].slice.call(arguments);
		return fn2(fn1(args.shift(),args.shift()), args.shift());
	}
}

var multAndSum = compose2(mult, sum);
multAndSum(3,4,5);
function multAndSum(x,y,z) {
	return sum(mult(x,y), z);
}

multAndSum(3,4,5);
function sumIter() {
	var sum = 0;
	for(var i = 0; i < arguments.length; i++) {
		sum = sum + arguments[i];
	}
	return sum;
}
sumIter(1,2,3);
function sumRecur() {
	var args = [].slice.call(arguments);
	if (args.length <= 2) {
		return args[0] + args[1];
	}
	return (args[0] + sumRecur.apply(null, args.slice(1)));
}

// ES6 code in recursive
function sumRecur(...args) {
	if (args.length <= 2) {
		return args[0] + args[1];
	}
	return (args[0] + sumRecur(...args.slice(1)));
}

