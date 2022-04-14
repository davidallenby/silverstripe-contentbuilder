

<div class="elememt_grid element-padding-y<% if $Contained %> container<% end_if %>">
  <% if ShowTitle %>
    <h2 class="mb-5<% if AlignTitleCenter %> text-center<% end_if %>">$Title</h2>
  <% end_if %>

  <div class="row">
    <% if $GridColumns %>
      <% loop $GridColumns %>
        <div class="col-$Xs col-sm-$Sm col-md-$Md col-lg-$Lg col-xl-$Xl <% if AdditionalClasses %>$AdditionalClasses<% end_if %>">
          $Me
        </div>
      <% end_loop %>
    <% end_if %>
  </div>
</div>