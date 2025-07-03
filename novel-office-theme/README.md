
#  Novel Office Theme

A custom WordPress theme developed as part of a web development assignment. It includes a full-width header section, a custom navigation menu, and a custom post type for Testimonials.

##  Installation Steps

1. Download the theme as a ZIP file (`novel-office-theme.zip`).
2. Go to your WordPress Admin Dashboard.
3. Navigate to **Appearance → Themes → Add New → Upload Theme**.
4. Upload the ZIP and click **Install Now**.
5. Click **Activate** to enable the theme.

## Custom Post Types Used

### Testimonial

- Registered via `register_post_type()` inside `functions.php`.
- Supports the following features:
  - `title` (client name or title)
  - `editor` (testimonial body)
  - `thumbnail` (client image or logo)
- Accessible via the WordPress dashboard.
- REST API enabled using `show_in_rest => true`.

## Performance Optimizations Implemented

1. **Lazy Loading**
   - Images are background-loaded using CSS.
   - WordPress handles built-in lazy loading for images via the `loading="lazy"` attribute.

2. **Image Optimization**
   - Theme images (logo and background) are pre-compressed before use.
   - Tools like TinyPNG are recommended before asset upload.

3. **Efficient Enqueueing**
   - All CSS is loaded using `wp_enqueue_style()` in `functions.php`.
   - No inline styles or hardcoded HTML `<link>` tags.

4. **Minimal Dependencies**
   - Theme does not use any page builders or extra plugins.
   - Built using core PHP, HTML5, and WordPress best practices.

## Design Reference

Implements the layout and styling based on a Figma prototype. Key components include:
- Logo at top-left
- Navigation menu at top-right
- Hero section with full-screen background image
- Centered headline and subheadline

---

Built by: Prajakta Kapade
