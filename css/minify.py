import cssmin #pip install cssmin


files = ['010_base.css', '900_style.css', '901_custom.css', '999_print.css', 'ie.css']

#foreach in array, open it then minify it
output = ''
for data in files:
    output += cssmin.cssmin(open(data).read())

new_file_name = 'styles.min.css'
file(new_file_name,'wt') #creates the file

#opens the file, clears it, writes the minified data
target = open(new_file_name, 'w')
target.truncate
target.write(output)
target.close
