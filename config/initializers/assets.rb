# Be sure to restart your server when you modify this file.

# Version of your assets, change this if you want to expire all your assets.
Rails.application.config.assets.version = '1.0'

# Add additional assets to the asset load path
# Rails.application.config.assets.paths << Emoji.images_path

# Precompile additional assets.
# application.js, application.css, and all non-JS/CSS in app/assets folder are already added.
# Rails.application.config.assets.precompile += %w( search.js )
Rails.application.config.assets.precompile += %w( login.js ckeditor/* scrollsmoothly.js jquery-1.9.1 tab jquery-ui main  Effect common default jquery script tabslide bootstrap.min jquery.colorbox jquery_ujs)
Rails.application.config.assets.precompile += %w(ckeditor/config.js)
Rails.application.config.assets.precompile += %w( login.css style.css pad.css sp.css jquery-ui.css colorbox.css)
