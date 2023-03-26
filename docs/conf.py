# -*- coding: utf-8 -*-

# DO NOT EDIT THIS FILE!
#
# It's auto-generated by sonata-project/dev-kit package.

import sys, os

from sphinx.highlighting import lexers
from pygments.lexers.web import PhpLexer

extensions = ['sphinx_rtd_theme']
templates_path = ['_templates']
source_suffix = '.rst'
master_doc = 'index'
project = u'SonataAdminBundle'
copyright = u'2010, Thomas Rabaix'
exclude_patterns = ['_build']
pygments_style = 'sphinx'
highlight_language = 'php'

lexers['php'] = PhpLexer(startinline=True)
lexers['php-annotations'] = PhpLexer(startinline=True)
lexers['php-attributes'] = PhpLexer(startinline=True)
lexers['php-standalone'] = PhpLexer(startinline=True)
lexers['php-symfony'] = PhpLexer(startinline=True)

import sphinx_rtd_theme

html_theme = 'sphinx_rtd_theme'
html_theme_path = [sphinx_rtd_theme.get_html_theme_path()]
html_static_path = ['_static']
htmlhelp_basename = 'doc'
