function Dictionary() {
    this.add = add;
    this.dataStore = new Array();
    this.find = find;
    this.remove = remove;
    this.showAll=  showAll;
}
function add(key, value) {
    this.dataStore[key] = value;
}
function find(key) {
    return this.dataStore[key];
}
function remove(key) {
    delete this.dataStore[key];
}
function showAll() {
    // for each(var key in Object.keys(this.dataStore)) {
    //     console.log(key + " -> " + this.dataStore[key]);
    // }
}

