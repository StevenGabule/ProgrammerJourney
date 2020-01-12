function Graph(v) {
	this.vertices = v;
	this.edges = 0;
	this.adj = [];
	for (var i = 0; i < this.vertices; ++i) {
		this.adj[i] = [];
		this.adj[i].push("");
	}
	this.addEdge = addEdge;
	this.toString = toString;
	this.showGraph = showGraph;
	this.dfs = dfs;
	this.marked = [];
	for( var i = 0; i < this.vertices; ++i) {
		this.marked[i] = false;
	}
}

function addEdge(v,w) {
	this.adj[v].push(w);
	this.adj[w].push(v);
	this.edges++;
}

function showGraph() {
	for (var i = 0; i < this.vertices; ++i) {
		console.log(i + " -> ");
		for(var j = 0; j < this.vertices; ++j) {
			if (this.adj[i][j] != undefined) {
				console.log(this.adj[i][j] + ' ');
			}
		}
		console.log("\n");
	}
}

function dfs(v) {
	this.marked[v] = true;
	if (this.adj[v] != undefined) {
		console.log("Visited vertex: " + v);
	}
	for(var w = 0; v < this.adj[v];++w) {
		if (!this.marked[w]) {
			this.dfs(w);
		}
	}
}

g = new Graph(5);
g.addEdge(0,1);
g.addEdge(0,2);
g.addEdge(1,3);
g.addEdge(2,4);
g.showGraph();