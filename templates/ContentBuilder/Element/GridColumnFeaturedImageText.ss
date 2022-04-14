<div class="element_featuredimagetext">
  <% if Image %>
    <div class="d-flex align-items-center justify-content-center mx-auto mb-4 rounded-circle bg-white"
      style="width: 120px; height: 120px;"
    >
      <img src="$Image.URL" 
        class="element_featuredimagetext__image mx-auto d-block"
        style="max-width: 60px;"
      />
    </div>
  <% end_if %>
  <% if Title %>
    <h3 class="h5 text-center mb-3">$Title</h3>
  <% end_if %>
  <% if Content %>
    <p class="text-center">$Content</p>
  <% end_if %>
</div>