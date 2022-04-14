<div class="element_twocolumntextimage element-padding-y">
  <div class="container">
    <div class="row<% if AlignImage %> flex-row-reverse<% end_if %>">

      <div class="col-12 col-md-6 mb-4 mb-md-0 d-md-flex flex-column justify-content-center">
        <% if $Image %>
          <img src="$Image.URL" alt="" class="img-fluid rounded" />
        <% end_if %>
      </div>

      <div class="col-12 col-md-6 d-md-flex ps-lg-4 flex-column justify-content-center">
        <% if $ShowTitle %>
          <h2 class="element_title mb-4">$Title</h2>
        <% end_if %>
        <% if $Content %>
          <p>$Content</p>
        <% end_if %>
        <% if $ButtonLabel && $ButtonLink %>
          <p class="mt-4">
            <a href="$ButtonLink" class="btn btn-primary">$ButtonLabel</a>
          </p>
        <% end_if %>
      </div>
      
    </div>
  </div>
</div>
