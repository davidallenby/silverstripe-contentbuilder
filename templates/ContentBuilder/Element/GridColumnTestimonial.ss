<div class="gridcolumn-testimonial card h-100">
  <div class="card-body py-5">
    <div class="testimonial-image mx-auto mb-4">
      <% if Image %>
      <% else %>
        <img class="w-100 testimonial-image_placeholder"
          src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0Ij48cGF0aCBkPSJNMTIgMGMtNi42MjcgMC0xMiA1LjM3My0xMiAxMnM1LjM3MyAxMiAxMiAxMiAxMi01LjM3MyAxMi0xMi01LjM3My0xMi0xMi0xMnptMCAyMmMtMy4xMjMgMC01LjkxNC0xLjQ0MS03Ljc0OS0zLjY5LjI1OS0uNTg4Ljc4My0uOTk1IDEuODY3LTEuMjQ2IDIuMjQ0LS41MTggNC40NTktLjk4MSAzLjM5My0yLjk0NS0zLjE1NS01LjgyLS44OTktOS4xMTkgMi40ODktOS4xMTkgMy4zMjIgMCA1LjYzNCAzLjE3NyAyLjQ4OSA5LjExOS0xLjAzNSAxLjk1MiAxLjEgMi40MTYgMy4zOTMgMi45NDUgMS4wODIuMjUgMS42MS42NTUgMS44NzEgMS4yNDEtMS44MzYgMi4yNTMtNC42MjggMy42OTUtNy43NTMgMy42OTV6Ii8+PC9zdmc+" />
      <% end_if %>
    </div>

    <% if Quote %>
      <p class="">&#8221;$Quote&#8220;</p>
    <% end_if %>

    <% if Name %>
      <p class="mb-0 text-muted">
        <strong>$Name</strong>
      </p>
    <% end_if %>
  </div>
</div>