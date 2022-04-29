<div class="herobannerelement">
  <div class="container position-relative h-100">
    <% if $BannerImage %>
      <div class="position-absolute herobannerelement__background-image rounded" 
        style="background-image: url('$BannerImage.URL');"
      ></div>
    <% end_if %>
    <% if $ShowTitle %>
        <h2 class="herobannerelement__title display-2 text-center position-absolute text-white">$Title</h2>
    <% end_if %>
  </div>
</div>