import sys
import os
import shlex
from sphinx.highlighting import lexers
from pygments.lexers.web import PhpLexer

# Use environment variables to manipulate the config file.
production = os.environ.get('SDK_ENV', 'development') == 'production'

lexers['php'] = PhpLexer(startinline=True, linenos=1)
lexers['php-annotations'] = PhpLexer(startinline=True, linenos=1)
primary_domain = 'php'

project = u'eBay SDK for PHP'
version = '1.x'
copyright = u'2016, David T. Sadler'
author = u'David T. Sadler'
master_doc = 'index'

extensions = []

templates_path = ['_templates']
source_suffix = '.rst'
language = None
exclude_patterns = ['_build']

todo_include_todos = False

html_static_path = ['_static']

htmlhelp_basename = 'eBaySDKforPHPdoc'

html_favicon = 'favicon.ico'


# -- Options for LaTeX output ---------------------------------------------

latex_elements = {
# The paper size ('letterpaper' or 'a4paper').
#'papersize': 'letterpaper',

# The font size ('10pt', '11pt' or '12pt').
#'pointsize': '10pt',

# Additional stuff for the LaTeX preamble.
#'preamble': '',

# Latex figure (float) alignment
#'figure_align': 'htbp',
}

# Grouping the document tree into LaTeX files. List of tuples
# (source start file, target name, title,
#  author, documentclass [howto, manual, or own class]).
latex_documents = [
  (master_doc, 'eBaySDKforPHP.tex', u'eBay SDK for PHP Documentation',
   u'David T. Sadler', 'manual'),
]

# -- Options for manual page output ---------------------------------------

# One entry per manual page. List of tuples
# (source start file, name, description, authors, manual section).
man_pages = [
    (master_doc, 'ebaysdkforphp', u'eBay SDK for PHP Documentation',
     [author], 1)
]


# -- Options for Texinfo output -------------------------------------------

# Grouping the document tree into Texinfo files. List of tuples
# (source start file, target name, title, author,
#  dir menu entry, description, category)
texinfo_documents = [
  (master_doc, 'eBaySDKforPHP', u'eBay SDK for PHP Documentation',
   author, 'eBaySDKforPHP', 'One line description of project.',
   'Miscellaneous'),
]

# -- Options for Epub output ----------------------------------------------

# Bibliographic Dublin Core info.
epub_title = project
epub_author = author
epub_publisher = author
epub_copyright = copyright

# A list of files that should not be packed into the epub file.
epub_exclude_files = ['search.html']

# -- HTML theme settings ----------------------------------------------

html_show_source_link = False
html_sidebars = {
    '**': ['sidebarlogo.html',
      'globaltoc.html',
      'localtoc.html',
      'searchbox.html',
      'social.html']
}

import guzzle_sphinx_theme

html_translator_class = 'guzzle_sphinx_theme.HTMLTranslator'
html_theme_path = guzzle_sphinx_theme.html_theme_path()
html_theme = 'guzzle_sphinx_theme'

extensions.append('guzzle_sphinx_theme')

html_theme_options = {
    'project_nav_name': 'eBay SDK for PHP',
    'base_url': 'http://devbay.net/sdk/guides/'
}

if production:
    html_theme_options['google_analytics_account'] = 'UA-51857511-1'
