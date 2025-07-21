//tutorial.js
var myGrid = function() {
	return {
		init: function() {
			//we enable the QuickTips for the later Pagebar
Ext.QuickTips.init();

// create the Data Store
var ds = new Ext.data.Store({
	proxy: new Ext.data.HttpProxy({url: '../your_path_to/tutorial.php'}),
	reader: new Ext.data.JsonReader({
		root: 'myFriends',
		totalProperty: 'totalCount',
		id: 'id'
	},
	[
	{name: 'ID', mapping: 'id', type: 'int'},
	{name: 'Name', mapping: 'name', type: 'string'},
	{name: 'Country', mapping: 'country', type: 'string'},
	{name: 'ZipCode', mapping: 'zipcode', type: 'int'}
	]),
	// turn on remote sorting
	remoteSort: true
});
//we set the deafault sort to the id ascending
ds.setDefaultSort('ID', 'asc');

// now we create the Grid Columns 
var cm = new Ext.grid.ColumnModel([
	{header: "ID", dataIndex: 'ID', width: 70, sortable: true, align: 'right'},
	{header: "Name", dataIndex: 'Name', width: 100, sortable: true},
	{header: "Country", dataIndex: 'Country', width: 200, sortable: true},
	{header: "ZipCode", dataIndex: 'ZipCode', width: 70, sortable: true}
]);
// by default columns are sortable
cm.defaultSortable = true;

// create the grid
var grid = new Ext.grid.Grid('tutorial-grid', {
	ds: ds,
	cm: cm,
	selModel: new Ext.grid.RowSelectionModel({singleSelect:true}),
	enableColLock:true	
});
var gridFoot = grid.getView().getFooterPanel(true);
// add a paging toolbar to the grid's footer
var pagbar = new Ext.PagingToolbar(gridFoot, ds, {pageSize: 12});

ds.load({params:{start:0, limit:12}});
// render the Grid
grid.render();
		}
    };
}();
Ext.EventManager.onDocumentReady(myGrid.init, myGrid, true);