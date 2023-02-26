<!-- # Search and Pagination API Codes -->



[wpv-filter-start hide="false"]
[wpv-filter-controls]
<div>
  	<div class="form-group">
		<label>[wpml-string context="wpv-views"]Search[/wpml-string]</label>
		[wpv-filter-search-box output="bootstrap"]
	</div>
	<div class="form-group">
		<label>[wpml-string context="wpv-views"]Content Types[/wpml-string]</label>
		[wpv-control-postmeta field="wpcf-content-types" url_param="wpv-wpcf-content-types"]
	</div>
	<div class="form-group">
		<label>[wpml-string context="wpv-views"]InChI Tags[/wpml-string]</label>
		[wpv-control-post-taxonomy taxonomy="inchi-tag" type="multi-select" orderby="none" url_param="wpv-inchi-tag"]
</div>
CTRL Click - Select Multiple
  <div class="form-group">
  <br><a href="https://www.inchi-trust.org/wp/oer/" class="button">Reset</a> </br>
</div>
</div>
[/wpv-filter-controls]
[wpv-filter-end]



<!-- # Loop Editor -->



[wpv-layout-start]
	[wpv-items-found]
	<!-- wpv-loop-start -->
	<table class="result-table" width="100%">
		<thead>
			<tr>
				<th class="th">[wpv-heading name="post-link"]Published[/wpv-heading]</th>
				<th class="th">[wpv-heading name="post-link"]Title/Link[/wpv-heading]</th>
              	<th class="th">[wpv-heading name="content-types"]Content Type[/wpv-heading]</th>
			</tr>
		</thead>
		<tbody class="wpv-loop js-wpv-loop">
		<wpv-loop>
			<tr>
				[wpv-post-body view_template="Loop item in InChI Site Content View"]
			</tr>
		</wpv-loop>
		</tbody>
	</table>
	<!-- wpv-loop-end -->

<div class="container">
  <div class="page-select">
[wpv-pagination]Current Page= [wpv-pager-current-page] [wpv-pager-nav-links output="bootstrap" first_last_links="true" previous_next_links="true" force_previous_next="true"]Total Pages= [wpv-pager-total-pages][/wpv-pagination]
</div>
</div>
 
	[/wpv-items-found]
	[wpv-no-items-found]
		<strong>[wpml-string context="wpv-views"]No items found[/wpml-string]</strong>
	[/wpv-no-items-found]
[wpv-layout-end]



<!-- # Output Editor -->


<div class="row">
	<div class="col-sm-3">[wpv-filter-meta-html]</div>
	<div class="col-sm-9">[wpv-layout-meta-html]</div>
</div>
