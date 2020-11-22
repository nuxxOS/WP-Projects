#require 'net/ssh'
require 'net/ftp'
require 'susy'
require 'compass/import-once/activate'

http_path = "/"
css_dir = "/"
sass_dir = "./sass"
images_dir = "./img"
javascripts_dir = "./js"

output_style = :expanded
environment = :development
=begin
remote_theme_dir_absolute = '/web/wp-content/themes/Olympos/'
 
ftp_host = 'odomhydrographic.com' # Can be an IP
ftp_user = 'gaussodohydro' # SFTP Username
ftp_pass = 'pHLsxAR06ZMbomY' # SFTP Password
 
TXT_FILE_OBJECT = File.new('/Users/ivan/Sites/Odom/wp-content/themes/Olympos/style.css')
 
on_stylesheet_saved do |filename|
  Net::FTP.open( ftp_host, ftp_user , ftp_pass) do |ftp|
    ftp.putbinaryfile(TXT_FILE_OBJECT, "/web/wp-content/themes/Olympos/#{File.basename(TXT_FILE_OBJECT)}")
    end
  puts ">>>> Compass is polling for changes. Press Ctrl-C to Stop - Uploaded"
end
=end