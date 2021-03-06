<?php
?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel='stylesheet' href='css/bootstrap.min.css'>
	<script src='js/jquery-3.4.1.min.js?ver=1'></script>
	<script src='js/bootstrap.min.js?ver=1'></script>
</head>
<body>

<script>
	$(function () {
		$('polygon [data-toggle="popover"]').popover({
			container: 'body'
		});
	})
</script>

				<svg id="map-svg" width="800" viewbox="0 0 500 500" style="margin-top: 60px; padding: 0px;">
		<defs>
			<style type="text/css">
				#map-svg polygon:hover {
					fill: #f0f0f0;
				}
				
				.adis1 {
					font: italic 16px sans-serif;
				}
				.adis2 {
					font: italic 20px sans-serif;
				}
			</style>
		</defs>
		
		<text x="60" y="30" class="adis1">Автоматизированная информационная система</text>
		<text x="180" y="55" class="adis2">"Журнал АДИС"</text>
		
		<g id="svg_region">
			<polygon id="region-1" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="145,363 143,364 142,365 141,365
						141,364 140,363 138,363 138,361
						136,361 136,360 134,360 134,359
						133,358 131,358 131,359 128,359
						128,362 130,362 130,364 131,364
						131,365 132,365 132,368 133,368
						133,369 134,369 134,371 137,371
						137,372 138,372 138,373 140,373
						140,372 143,372 143,370 145,367
						143,365 145,361"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_1.jpg' class='map-region-img'>УМВД России по г. Сыктывкару" data-content="УВМ МВД по РК<br>ЭКЦ МВД по РК<br>ДЧ<br>ДЧ ОП №2<br>ОВМ<br>СП<br>ИВС<br>ЭКО" tabindex="0"></polygon>

			<polygon id="region-14" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="102,371 105,372 104,380 108,380
						109,381 113,381 114,376 117,376
						119,377 120,379 123,379 123,382
						123,384 125,386 126,389 125,393
						128,393 131,394 133,395 136,396
						136,400 139,401 139,403 138,405
						142,405 145,406 148,407 151,408
						152,406 153,402 153,400 149,399
						149,395 150,391 151,391 151,387
						149,387 148,383 146,382 142,382
						141,380 142,377 140,376 140,372
						140,373 138,373 137,372 137,371
						134,371 134,369 133,369 133,368
						132,368 132,365 131,365 131,364
						130,364 130,362 128,362 128,359
						131,359 131,358 133,358 134,359
						134,360 136,360 136,361 138,361
						138,363 140,363 141,364 141,365
						142,365 143,364 145,363 145,361
						146,358 145,357 142,357 141,351
						142,349 142,344 142,342 140,342
						140,341 136,341 136,340 133,340
						133,341 132,343 132,343 131,348
						129,347 124,347 122,348 120,351
						117,351 117,352 115,352 115,356
						112,356 112,360 111,360 111,363
						107,363 106,362 104,362 103,363
						102,369"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_14.gif' class='map-region-img'>ОМВД России по Сыктывдинскому р-ну" data-content="ДЧ" tabindex="0"></polygon>

			<polygon id="region-18" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="203,90  320,90  320,152 294,150
						285,165 273,161 262,167 257,159
						232,175 240,152 243,152 243,149
						233,149 203,123" data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_18.gif' class='map-region-img'>ОМВД России по г. Усинску" data-content="ДЧ<br>ОВМ<br>ИВС" tabindex="0"></polygon>
			
			<polygon id="region-4" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="320,90  345,90  343,93  349,90
						376,90  378,91  380,90  393,90
						393,102 389,104 409,117 409,119
						417,128 411,141 414,143 414,144
						411,144 411,149 406,149 405,148
						403,150 400,151 398,153 394,154
						391,156 390,159 386,161 385,166
						382,167 378,174 375,178 378,181
						375,182 376,185 372,185 371,190
						369,191 368,193 364,193 363,197
						360,198 357,194 356,190 351,190
						343,180 341,180 335,181 331,178
						327,180 323,176 318,172 327,155
						320,152" data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_4.gif' class='map-region-img'>ОМВД России по г. Инте" data-content="ДЧ<br>ИВС" tabindex="0"></polygon>

				<polygon id="region-3" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
					points="385,90  385,84  412,68  412,64
							410,62  413,61  413,56  417,55
							422,49  427,48  429,51  433,51
							431,48  438,42  434,34  446,30
							447,26  451,26  450,19  453,15
							472,14  467,22  470,40  473,39
							477,41  481,38  487,40  486,43
							485,47  490,51  488,54  485,53
							484,54  481,53  479,60  485,59
							486,64  484,67  477,69  477,72
							471,77  468,78  466,80  466,85
							463,87  464,94  459,97  455,98
							451,99  450,103 446,104 446,107
							437,107 435,111 430,114 428,116
							424,117 422,122 420,126 422,129
							420,129 418,127 417,128 409,119
							409,117 389,104 393,102 393,90"
							data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_3.gif' class='map-region-img'>ОМВД России по г. Воркуте" data-content="ДЧ<br>ОВМ<br>СП<br>ЭКО" tabindex="0"></polygon>
				
		
				<polygon id="region-21" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
					points="203,90  166,83  159,89  157,93
							153,91  152,95  151,98  152,100
							94,135  95,182  108,179 123,203
							128,204 133,208 135,212 138,212
							139,215 140,217 139,221 141,223
							140,225 144,225 142,226 147,223
							148,221 149,219 152,219 153,220
							157,220 158,221 162,221 169,212
							174,211 179,208 183,208 185,207
							189,204 191,200 180,181 180,177
							182,176 182,173 203,123"
							data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_21.gif' class='map-region-img'>ОМВД России по Усть-Цилемскому р-ну" data-content="" tabindex="0"></polygon>
				
		
				<polygon id="region-8" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
					points="203,123 233,149 243,149 243,152
							240,152 232,175 226,181 225,195
							224,201 223,208 222,214 221,220
							220,221 226,226 221,228 219,229
							216,230 213,231 212,230 209,230
							208,229 205,229 203,228 190,228
							188,229 184,228 181,227 181,226
							178,226 177,226 176,225 173,225
							172,224 170,224 169,223 166,223
							166,222 162,221 169,212 174,211
							179,208 183,208 185,207 189,204
							191,200 180,181 180,177 182,176
							182,173"
							data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_8.gif' class='map-region-img'>ОМВД России по Ижемскому р-ну" data-content="" tabindex="0"></polygon>
				
		
				<polygon id="region-5" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
					points="232,175 257,159 262,167 273,161
							285,165 294,150 320,152 327,155
							318,172 323,176 327,180 331,178
							335,181 341,180 343,180 351,190
							350,191 347,192 347,195 346,197
							344,197 344,199 341,199 341,201
							339,202 339,204 337,205 337,208
							339,209 340,210 340,211 341,212
							338,212 337,214 333,213 332,212
							330,212 329,213 326,213 325,213
							326,213 325,214 322,214 321,216
							320,217 319,218 318,216 316,216
							317,216 315,216 314,217 313,219
							311,218 309,218 308,217 305,217
							304,216 301,216 300,215 296,215
							296,219 297,220 296,221 294,221
							293,220 292,219 291,218 290,219
							288,219 287,218 285,218 285,217
							282,217 280,216 278,217 278,220
							277,221 276,223 275,225 274,227
							274,229 273,230 272,231 272,232
							271,233 270,235 267,232 264,230
							262,229 260,228 258,228 255,227
							255,227 253,228 250,226 248,225
							246,225 245,224 243,224 240,222
							238,221 235,222 233,223 230,224
							228,225 226,226 220,221 221,220
							222,214 223,208 224,201 225,195
							226,181"
							data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_5.gif' class='map-region-img'>ОМВД России по г. Печоре" data-content="ДЧ<br>ОВМ<br>СП" tabindex="0"></polygon>
				
		
			<polygon id="region-17" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="128,204 127,210 126,214 125,219
						121,218 116,217 112,217 109,217
						106,216 106,219 105,224 101,223
						97,222  93,221  92,224  91,229
						88,229  83,227  83,231  82,236
						79,235  76,234  75,232  75,228
						56,228  47,229  41,230  38,230
						37,231  35,232  33,233  31,234
						27,232  23,231  19,232  18,233
						15,235  11,237  15,243  23,248
						24,249  29,249  36,253  40,256
						42,258  45,261  46,264  48,267
						49,270  50,271  48,273  46,275
						46,281  48,282  49,285  52,286
						58,291  61,291  60,295  60,297
						58,299  58,301  49,308  51,312
						53,318  53,334  57,334  57,342
						63,342  65,334  79,335  78,326
						77,324  78,320  79,316  79,313
						83,314  87,315  87,311  88,307
						95,308  102,309 108,311 113,312
						113,307 114,307 114,303 115,303
						115,297 116,296 118,296 118,293
						119,292 119,288 122,289 126,289
						130,290 131,287 132,284 133,284
						133,282 130,282 130,281 132,278
						128,278 128,274 126,274 126,271
						127,269 124,269 121,268 120,267
						117,267 116,263 114,263 113,262
						112,262 111,260 112,259 112,256
						113,255 113,251 114,251 114,247
						115,246 117,247 121,247 121,248
						126,248 126,249 130,249 130,250
						132,250 132,246 133,246 133,242
						134,242 134,237 135,237 138,236
						138,232 139,232 139,228 140,228
						140,225 141,223 139,221 140,217
						139,215 138,212 135,212 133,208"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_17.gif' class='map-region-img'>ОМВД России по Удорскому р-ну" data-content="ДЧ" tabindex="0"></polygon>
			
		
			<polygon id="region-19" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="108,311 108,313 107,316 107,320
						106,323 105,327 105,331 104,335
						103,338 103,341 102,344 101,344
						100,346 99,348  98,350  98,353
						97,355  96,359  96,365  95,370
						97,370  99,370  102,371 102,369
						103,363 104,362 106,362 107,363
						111,363 111,360 112,360 112,356
						115,356 115,352 117,352 117,351
						120,351 122,348 124,347 129,347
						131,348 132,343 133,341 133,340
						133,338 131,338 131,335 128,335
						128,334 125,334 126,330 122,330
						122,329 118,329 118,328 115,328
						115,325 116,325 116,320 117,320
						117,315 118,315 118,313 116,312
						113,312"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_19.gif' class='map-region-img'>ОМВД России по г. Усть-Вымскому р-ну" data-content="ДЧ ОП №15<br>ИВС" tabindex="0"></polygon>
			
		
			<polygon id="region-9" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="162,221 158,221 157,220 153,220
						152,219 149,219 148,221 147,223
						142,226 144,225 140,225 140,228
						139,228 139,232 138,232 138,236
						135,237 134,237 134,242 133,242
						133,246 132,246 132,250 130,250
						130,249 126,249 126,248 121,248
						121,247 121,247 117,247 115,246
						114,247 114,251 114,251 113,251
						113,255 112,256 112,259 111,260
						112,262 113,262 114,263 116,263
						117,267 120,267 121,268 124,269
						127,269 126,271 126,274 128,274
						128,278 132,278 130,281 130,282
						133,282 133,284 132,284 131,287
						130,290 126,289 122,289 119,288
						119,292 118,293 118,296 116,296
						115,297 115,303 114,303 114,307
						113,307 113,312 116,312 118,313
						118,315 117,315 117,320 116,320
						116,325 115,325 115,328 118,328
						118,329 122,329 122,330 126,330
						125,334 128,334 128,335 131,335
						131,338 133,338 133,340 136,340
						136,341 140,341 140,342 142,342
						143,336 142,334 145,331 146,331
						146,326 145,326 145,322 146,322
						146,319 148,319 148,317 149,315
						151,316 153,316 154,317 156,318
						157,315 161,315 161,316 165,316
						165,317 170,317 170,318 173,318
						173,313 174,313 174,307 178,307
						179,308 183,308 183,309 186,309
						186,310 190,310 190,307 191,307
						192,302 189,302 189,301 184,301
						185,298 186,293 185,291 182,290
						181,286 182,283 179,283 179,282
						175,282 175,279 176,276 174,275
						174,272 176,268 174,264 175,261
						176,257 178,252 175,252 175,251
						170,251 170,247 171,245 164,244
						165,240 166,234 165,233 161,233
						159,232 160,229 161,226 162,224"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_9.gif' class='map-region-img'>ОМВД России по г. Княжпогостскому р-ну" data-content="" tabindex="0"></polygon>
			
		
			<polygon id="region-6" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="203,228 202,230 201,232 201,235
						200,238 197,238 196,240 193,242
						196,244 197,247 198,249 198,253
						197,258 199,259 199,261 206,265
						204,268 207,269 207,272 210,272
						210,275 211,279 224,295 222,300
						231,319 224,318 215,316 207,314
						200,312 197,312 190,310 190,307
						191,307 192,302 189,302 189,301
						184,301 185,298 186,293 185,291
						182,290 181,286 182,283 179,283
						179,282 175,282 175,279 176,276
						174,275 174,272 176,268 174,264
						175,261 176,257 178,252 175,252
						175,251 170,251 170,247 171,245
						164,244 165,240 166,234 165,233
						161,233 159,232 160,229 161,226
						162,224 162,221 166,222 166,223
						169,223 170,224 172,224 173,225
						176,225 177,226 178,226 181,226
						181,227 184,228 188,229 190,228"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_6.gif' class='map-region-img'>ОМВД России по г. Ухте" data-content="ДЧ<br>ОВМ<br>ИВС<br>СП<br>ЭКО" tabindex="0"></polygon>
			
		
			<polygon id="region-13" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="258,228 255,227 255,227 253,228
						250,226 248,225 246,225 245,224
						243,224 240,222 238,221 235,222
						233,223 230,224 228,225 226,226
						221,228 219,229 216,230 213,231
						212,230 209,230 208,229 205,229
						203,228 202,230 201,232 201,235
						200,238 197,238 196,240 193,242
						196,244 197,247 198,249 198,253
						197,258 199,259 199,261 206,265
						204,268 207,269 207,272 210,272
						210,275 211,279 224,295 222,300
						231,319 235,320 235,316 236,312
						238,308 238,304 239,300 240,296
						243,294 244,291 245,287 245,284
						246,281 247,278 248,276 251,277
						254,278 256,279 255,281 259,282
						262,284 262,287 266,288 268,289
						269,290 270,288 272,288 273,286
						268,284 266,283 265,281 260,278
						259,277 260,275 258,273 260,270
						261,266 258,265 254,264 250,263
						251,259 253,256 251,254 253,250
						251,247 252,243 254,239 255,235
						256,232 257,230"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_13.gif' class='map-region-img'>ОМВД России по г. Сосногорску" data-content="ДЧ<br>ОВМ" tabindex="0"></polygon>
			
		
			<polygon id="region-7" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="337,214 333,213 332,212
						330,212 329,213 326,213 325,213
						326,213 325,214 322,214 321,216
						320,217 319,218 318,216 316,216
						317,216 315,216 314,217 313,219
						311,218 309,218 308,217 305,217
						304,216 301,216 300,215 296,215
						296,219 297,220 296,221 294,221
						293,220 292,219 291,218 290,219
						288,219 287,218 285,218 285,217
						282,217 280,216 278,217 278,220
						277,221 276,223 275,225 274,227
						274,229 273,230 272,231 272,232
						271,233 270,235 267,232 264,230
						262,229 260,228 258,228 257,230
						256,232 255,235 254,239 252,243
						251,247 253,250 251,254 253,256
						251,259 250,263 254,264 258,265
						261,266 260,270 258,273 260,275
						259,277 260,278 265,281 266,283
						268,284 273,286 288,291 289,288
						291,282 293,278 294,274 295,270
						296,268 298,263 302,269 303,267
						307,269 307,276 308,282 313,282
						317,281 320,284 325,284 325,288
						326,292 329,294 331,292 329,290
						332,286 330,283 332,280 330,278
						332,276 334,271 334,264 335,256
						337,253 336,251 340,248 341,243
						342,239 339,238 336,234 337,229
						338,222 337,220 334,220 336,218"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_7.png' class='map-region-img'>ОМВД России по г. Вуктылу" data-content="" tabindex="0"></polygon>
			
		
			<polygon id="region-16" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="329,294 328,298 333,303 334,307
						331,312 333,316 334,322 338,323
						337,326 336,330 338,331 335,335
						335,338 332,343 332,346 334,352
						335,354 331,360 331,363 333,365
						330,370 327,370 325,375 320,376
						319,378 280,378 278,379 270,376
						267,382 263,381 262,386 260,384
						259,379 260,375 261,371 262,371
						262,366 259,362 255,358 249,355
						248,354 246,357 243,356 241,353
						244,349 236,339 237,336 239,332
						240,329 241,326 242,323 240,322
						236,321 235,320 235,316 236,312
						238,308 238,304 239,300 240,296
						243,294 244,291 245,287 245,284
						246,281 247,278 248,276 251,277
						254,278 256,279 255,281 259,282
						262,284 262,287 266,288 268,289
						269,290 270,288 272,288 273,286
						288,291 289,288 291,282 293,278
						294,274 295,270 296,268 298,263
						302,269 303,267 307,269 307,276
						308,282 313,282 317,281 320,284
						325,284 325,288 326,292"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_16.gif' class='map-region-img'>ОМВД России по Троицко-Печорскому району" data-content="" tabindex="0"></polygon>
			
		
			<polygon id="region-20" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="262,386 261,394 250,391 248,399
						238,397 236,404 233,404 231,411
						206,405 205,412 194,410 195,402
						183,399 179,398 179,395 180,391
						181,386 180,386 180,381 175,381
						175,378 176,378 176,374 178,373
						179,374 183,374 184,375 185,375
						186,374 186,370 187,367 185,366
						186,364 185,362 186,360 183,358
						183,356 185,356 188,358 188,355
						192,355 196,351 198,345 195,344
						196,340 198,340 199,336 196,336
						197,333 197,331 198,328 196,328
						197,325 197,322 198,320 196,319
						197,312 200,312 207,314 215,316
						231,319 235,320 236,321 240,322
						242,323 241,326 240,329 239,332
						237,336 236,339 244,349 241,353
						243,356 246,357 248,354 249,355
						255,358 259,362 262,366 262,371
						261,371 260,375 259,379 260,384"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_20.gif' class='map-region-img'>ОМВД России по Усть-Куломскому р-ну" data-content="ИВС" tabindex="0"></polygon>
			
		
			<polygon id="region-11" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="183,399 181,407 173,405 171,413
						160,410 151,408 152,406 153,402
						153,400 149,399 149,395 150,391
						151,391 151,387 149,387 148,383
						146,382 142,382 141,380 142,377
						140,376 141,372 143,372 143,370
						145,367 143,365 145,361 146,358
						145,357 142,357 141,351 142,349
						142,344 142,342 143,336 142,334
						145,331 146,331 146,326 145,326
						145,322 146,322 146,319 148,319
						148,317 149,315 151,316 153,316
						154,317 156,318 157,315 161,315
						161,316 165,316 165,317 170,317
						170,318 173,318 173,313 174,313
						174,307 178,307 179,308 183,308
						183,309 186,309 186,310 190,310
						197,312 196,319 198,320 197,322
						197,325 196,328 198,328 197,331
						197,333 196,336 199,336 198,340
						196,340 195,344 198,345 196,351
						192,355 188,355 188,358 185,356
						183,356 183,358 186,360 185,362
						186,364 185,366 187,367 186,370
						186,374 185,375 184,375 183,374
						179,374 178,373 176,374 176,378
						175,378 175,381 180,381 180,386
						181,386 180,391 179,395 179,398"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_11.gif' class='map-region-img'>ОМВД России по Корткеросскому р-ну" data-content="" tabindex="0"></polygon>

			<polygon id="region-15" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="104,380 101,396 97,395  93,398
						97,402  105,417 109,419 109,422
						111,422 116,423 117,420 119,420
						124,421 123,418 126,417 128,418
						130,418 131,413 137,412 137,409
						138,405 139,403 139,401 136,400
						136,396 133,395 131,394 128,393
						125,393 126,389 125,386 123,384
						123,382 123,379 120,379 119,377
						117,376 114,376 113,381 109,381
						108,380"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_15.jpg' class='map-region-img'>ОМВД России по Сысольскому р-ну" data-content="" tabindex="0"></polygon>

			<polygon id="region-10" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="160,410 157,426 166,428 166,432
						170,433 171,438 170,444 164,440
						158,449 155,455 151,461 149,460
						149,457 146,455 142,453 140,456
						136,463 132,463 128,465 124,466
						123,470 121,468 117,468 117,462
						118,455 120,450 120,443 121,441
						123,441 126,442 127,439 127,434
						124,433 120,433 118,432 118,429
						116,429 116,423 117,420 119,420
						124,421 123,418 126,417 128,418
						130,418 131,413 137,412 137,409
						138,405 142,405 145,406 148,407
						151,408"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_10.jpg' class='map-region-img'>ОП №14 с. Койгородок" data-content="" tabindex="0"></polygon>

			<polygon id="region-12" fill="#FFFFFF" stroke="#A8A8A8" stroke-width="0.5"
				points="93,398  81,403  80,413  82,418
						83,422  84,427  82,430  84,432
						86,434  84,436  89,438  82,446
						82,455  83,472  89,472  96,474
						96,478  95,484  97,483  101,484
						102,488 106,488 106,492 106,498
						109,499 113,497 114,491 114,484
						112,484 113,480 113,475 119,473
						116,470 117,468 117,462 118,455
						120,450 120,443 121,441 123,441
						126,442 127,439 127,434 124,433
						120,433 118,432 118,429 116,429
						116,423 111,422 109,422 109,419
						105,417 97,402"
						data-toggle="popover" data-html="true" data-trigger="hover" title="<img src='images/regions/region_12.gif' class='map-region-img'>ОМВД России по Прилузскому р-ну" data-content="ДЧ" tabindex="0"></polygon>
		</g>
		
		<g id="svg-city">
			<circle id="city-1" fill="#CC2E2E" cx="137" cy="365" r="1.507"></circle>
			<circle id="city-3" fill="#CC2E2E" cx="438" cy="64" r="1.507"></circle>
			<circle id="city-4" fill="#CC2E2E" cx="346" cy="135" r="1.507"></circle>
			<circle id="city-5" fill="#CC2E2E" cx="295" cy="137" r="1.507"></circle>
			<circle id="city-6" fill="#CC2E2E" cx="200" cy="270" r="1.507"></circle>
			<circle id="city-7" fill="#CC2E2E" cx="286" cy="256" r="1.507"></circle>
			<circle id="city-8" fill="#CC2E2E" cx="213" cy="185" r="1.507"></circle>
			<circle id="city-9" fill="#CC2E2E" cx="141" cy="320" r="1.507"></circle>
			<circle id="city-10" fill="#CC2E2E" cx="142" cy="435" r="1.507"></circle>
			<circle id="city-11" fill="#CC2E2E" cx="150" cy="368" r="1.507"></circle>
			<circle id="city-12" fill="#CC2E2E" cx="284" cy="178" r="1.507"></circle>
			<circle id="city-13" fill="#CC2E2E" cx="104" cy="439" r="1.507"></circle>
			<circle id="city-14" fill="#CC2E2E" cx="204" cy="261" r="1.507"></circle>
			<circle id="city-15" fill="#CC2E2E" cx="137" cy="375" r="1.507"></circle>
			<circle id="city-16" fill="#CC2E2E" cx="113" cy="400" r="1.507"></circle>
			<circle id="city-17" fill="#CC2E2E" cx="258" cy="313" r="1.507"></circle>
			<circle id="city-18" fill="#CC2E2E" cx="95" cy="270" r="1.507"></circle>
			<circle id="city-19" fill="#CC2E2E" cx="114" cy="335" r="1.507"></circle>
			<circle id="city-20" fill="#CC2E2E" cx="198" cy="365" r="1.507"></circle>
			<circle id="city-21" fill="#CC2E2E" cx="169" cy="172" r="1.507"></circle>
		</g>
		

		
		</svg>

</body>
</html>