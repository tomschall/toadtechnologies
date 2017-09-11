/*
Author:
Thomas Mayer <thomas@residuum.org>

Copyright (c) 2011-2015 Thomas Mayer

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.

*/

#include <stdlib.h>
#include <string.h>
#include <curl/curl.h>
#include <pthread.h>
#include <oauth.h>
#include "purest_json.h"

struct _rest;
typedef struct _rest t_rest;

/* constructor */
APIEXPORT void APICALL *rest_new(t_symbol *sel, const int argc, t_atom *argv);
/* destructor */
APIEXPORT void APICALL rest_free(t_rest *rest, const t_symbol *sel, const int argc, const t_atom *argv);

/* HTTP request */
APIEXPORT void APICALL rest_command(t_rest *rest, const t_symbol *sel, const int argc, t_atom *argv); 
/* set or clear timeout */
APIEXPORT void APICALL rest_timeout(t_rest *rest, const t_floatarg f);
/* inits object and sets parameters */
APIEXPORT void APICALL rest_init(t_rest *rest, const t_symbol *sel, const int argc, t_atom *argv);
/* sets or clears check of SSL certificate */
APIEXPORT void APICALL rest_sslcheck(t_rest *rest, const t_floatarg f);
/* cancel request */
APIEXPORT void APICALL rest_cancel(t_rest *rest, const t_symbol *sel, const int argc, const t_atom *argv);
/* set header */
APIEXPORT void APICALL rest_header(t_rest *rest, const t_symbol *sel, const int argc, t_atom *argv);
/* clear header */
APIEXPORT void APICALL rest_clear_headers(t_rest *rest, const t_symbol *sel, const int argc, const t_atom *argv);
/* sets output file */
APIEXPORT void APICALL rest_file(t_rest *rest, const t_symbol *sel, const int argc, t_atom *argv);
/* sets mode to HTTP streaming or blocking */
APIEXPORT void APICALL rest_mode(t_rest *rest, const t_symbol *sel, const int argc, t_atom *argv);
/* sets proxy */
APIEXPORT void APICALL rest_proxy(t_rest *rest, const t_symbol *sel, const int argc, t_atom *argv);
