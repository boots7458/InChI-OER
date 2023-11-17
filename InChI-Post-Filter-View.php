<!-- # Search and Pagination API Codes -->

[wpv-filter-start hide="false"]
<div>
[wpv-filter-controls]
  	<div class="form-group">
	</div>
	<div class="oer-types">
      <div class="content-type-label"><label>[wpml-string context="wpv-views"]Content Types[/wpml-string]</label></div>
      <div class="oer-type-select">[wpv-control-postmeta field="wpcf-content-types" url_param="wpv-wpcf-content-types"]</div>
	</div>

	<div class="tags-box">
      <div class="content-type-label"><label>[wpml-string context="wpv-views"]InChI Tags[/wpml-string]</label></div>
		<div class="checkboxes">[wpv-control-post-taxonomy taxonomy="inchi-tag" type="checkboxes" orderby="slug" url_param="wpv-inchi-tag"]</div>
    </div>
  <br><a href="https://www.inchi-trust.org/oer" class="button" target="_parent">Reset</a></br>
[wpv-filter-controls]
</div>
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
<div class="page-select-box">
<div class="page-select">
[wpv-pagination]Current Page= [wpv-pager-current-page]
<div>
[wpv-pager-nav-links output="bootstrap" first_last_links="true"]
  </div>
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