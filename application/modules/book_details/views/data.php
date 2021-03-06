 <div class="col-sm-6">
    <div class="table_horizontal">
		<div class="input-group custom_addon">
            <div class="input-group-addon"  style="box-shadow:none; -webkit-box-shadow:none;"><i class="fa fa-search"></i></div>
				<input type="text" ng-model="search_text" placeholder="Search here...">
			</div>
		</div>
		<div class="table-data">
			<table class="table table-hover">
				<thead>
					<tr class="active">
						<th class="text-center">Supplier</th>
						<th class="text-center">Book name</th>
						<th class="text-center">Author</th>
						<th class="text-center">Publisher</th>
						<th class="text-center">Genre</th>
						<th class="text-center">ISBN</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Pur_rate</th>
                        <th class="text-center">Sell_rate</th>
                        <th class="text-center">Shelf Number</th>
                        <th class="text-center">Shelf Name</th>
                        <th class="text-center">Shelf Row</th>
						<th class="text-center">Search category</th>
						<th class="text-center" style="width:85px">Action</th>
					</tr>
				</thead>
				<tbody>
					<tr dir-paginate="y in datadb | filter: search_text | itemsPerPage: 6" >
						<td>{{y.supplier_name}}</td>
						<td>{{y.book_name}}</td>
						<td>{{y.author_name}}</td>
						<td>{{y.pub_name}}</td>
						<td>{{y.genre_name}}</td>
						<td>{{y.isbn}}</td>
						<td>{{y.quantity}}</td>
						<td>{{y.pur_rate}}</td>
						<td>{{y.sell_rate}}</td>
						<td>{{y.shelf_number}}</td>
						<td>{{y.shelf_name}}</td>
						<td>{{y.shelf_row}}</td>
						<td>{{y.search_category}}</td>
						
						
						<td>
						  <a href="javascript:void(0)" ng-click="update_call(y)" data-toggle="modal" data-target=".bs-example-modal-sm">
    						<span class="fa fa-pencil fa-2x"></span></a>
    						&nbsp;&nbsp;&nbsp;<a href="javascript:void(0)" ng-click="delete_data(y.b_id)">
    						<span class="fa fa-trash"></span></a>               
						</td>
					</tr>
				</tbody>
			</table>
        </div>
        <div class="col-sm-12">
            <dir-pagination-controls boundary-links="true" on-page-change="pageChangeHandler(newPageNumber)" template-url="app/pagination"></dir-pagination-controls>
        </div>
   </div>