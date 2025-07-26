<?php
/**
 * Title: Brandbook
 * Slug: greenlight/brandbook
 * Categories: greenlight-general
 * Block Types: core/template-part/brandbook
 */
?>
<!-- wp:greenshift-blocks/element {"id":"gsbp-1e62b9d","inlineCssStyles":".brandbook-wrap \u003e div{box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07));}.gsbp-1e62b9d{display:flex;flex-direction:column;row-gap:20px;}","dynamicGClasses":[{"value":"brandbook-wrap","type":"local","label":"brandbook-wrap","localed":false,"css":"","attributes":{},"originalID":"gsbp-1e62b9d","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" \u003e div","attributes":{"styleAttributes":{"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07))"]}},"css":".brandbook-wrap \u003e div{box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07));}"}]}],"type":"inner","className":"brandbook-wrap","localId":"gsbp-1e62b9d","align":"wide","styleAttributes":{"display":["flex"],"flexDirection":["column"],"rowGap":["20px"]},"customJs":"document.addEventListener('DOMContentLoaded', () =\u003e {\n  const brandColorElements = document.querySelectorAll('.brandcolor');\n  const rootStyles = getComputedStyle(document.documentElement);\n\n  brandColorElements.forEach(element =\u003e {\n    const varName = element.getAttribute('data-var');\n    if (varName) {\n      const colorValue = rootStyles.getPropertyValue(varName.trim());\n      if (colorValue) {\n        element.innerHtml = colorValue.trim();\n        element.classList.add('colordone');\n      }\n    }\n  });\n});","customJsEnabled":true,"metadata":{"name":"BrandBook"}} -->
<div class="brandbook-wrap gsbp-1e62b9d alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-2fbac82","inlineCssStyles":"body .scrol-panel{padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem) !important;padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem) !important;padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem) !important;padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem) !important;position:sticky !important;top:0px !important;display:flex !important;column-gap:40px !important;}body .scrol-panel a{text-decoration:none !important;font-size:18px !important;}.gsbp-2fbac82{background-color:#ffffff;}","dynamicGClasses":[{"value":"scrol-panel","type":"local","label":"scrol-panel","localed":true,"css":"body .scrol-panel{padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem) !important;padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem) !important;padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem) !important;padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem) !important;position:sticky !important;top:0px !important;display:flex !important;column-gap:40px !important;}","attributes":{"styleAttributes":{"paddingTop":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem)"],"paddingBottom":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem)"],"paddingRight":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"paddingLeft":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"position":["sticky"],"top":["0px"],"display":["flex"],"columnGap":["40px"]}},"originalID":"gsbp-2fbac82","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" a","attributes":{"styleAttributes":{"textDecoration":["none"],"fontSize":["18px"]}},"css":"body .scrol-panel a{text-decoration:none !important;font-size:18px !important;}"}]},{"value":"gs-smart-scroll","type":"preset","label":"gs-smart-scroll"}],"type":"inner","className":"scrol-panel gs-smart-scroll is-template-mode","localId":"gsbp-2fbac82","align":"wide","styleAttributes":{"backgroundColor":["#ffffff"]},"customJs":"document.addEventListener('DOMContentLoaded', function() {\n    const scrollContainer = document.querySelector('.gs-smart-scroll');\n    if (scrollContainer) {\n        const links = scrollContainer.querySelectorAll('a[href^=\u0022#\u0022]');\n        links.forEach(link =\u003e {\n            link.addEventListener('click', function(e) {\n                e.preventDefault();\n                const href = this.getAttribute('href');\n\n                if (href === '#' || href === '') {\n                    window.scrollTo({\n                        top: 0,\n                        behavior: 'smooth'\n                    });\n                    return;\n                }\n\n                try {\n                    const targetElement = document.querySelector(href);\n                    if (targetElement) {\n                        targetElement.scrollIntoView({\n                            behavior: 'smooth',\n                            block: 'start'\n                        });\n                    }\n                } catch (error) {\n                    console.error(\u0022Invalid selector for smooth scroll:\u0022, href);\n                }\n            });\n        });\n    }\n});","customJsEnabled":true} -->
<div class="scrol-panel gs-smart-scroll is-template-mode gsbp-2fbac82 alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-15529ac","textContent":"Colors","tag":"a","localId":"gsbp-15529ac","href":"#colors","isVariation":"divtext"} -->
<a href="#colors">Colors</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9c4046d","textContent":"Typography","tag":"a","localId":"gsbp-9c4046d","href":"#typography","isVariation":"divtext"} -->
<a href="#typography">Typography</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9f5e49d","textContent":"Spacing","tag":"a","localId":"gsbp-9f5e49d","href":"#spacing","isVariation":"divtext"} -->
<a href="#spacing">Spacing</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-167c06b","textContent":"Size","tag":"a","localId":"gsbp-167c06b","href":"#size","isVariation":"divtext"} -->
<a href="#size">Size</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d777908","textContent":"Borders","tag":"a","localId":"gsbp-d777908","href":"#borders","isVariation":"divtext"} -->
<a href="#borders">Borders</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-aaefac2","textContent":"Shadows","tag":"a","localId":"gsbp-aaefac2","href":"#shadows","isVariation":"divtext"} -->
<a href="#shadows">Shadows</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e40413a","textContent":"Transitions","tag":"a","localId":"gsbp-e40413a","href":"#transitions","isVariation":"divtext"} -->
<a href="#transitions">Transitions</a>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8c7449e","textContent":"Extra","tag":"a","localId":"gsbp-8c7449e","href":"#extra","isVariation":"divtext"} -->
<a href="#extra">Extra</a>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1bc0eeb","anchor":"colors","type":"inner","localId":"gsbp-1bc0eeb","align":"wide","metadata":{"name":"Colors"}} -->
<div class="alignwide" id="colors"><!-- wp:greenshift-blocks/element {"id":"gspb-DTHotu2","inlineCssStyles":".brand-panel-wrap{display:flex;flex-direction:row;align-items:center;justify-content:space-between;color:rgba(0,0,0,1);background-color:#ecf0f3;padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);}","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":".brand-panel-wrap{display:flex;flex-direction:row;align-items:center;justify-content:space-between;color:rgba(0,0,0,1);background-color:#ecf0f3;padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);}","attributes":{"styleAttributes":{"display":["flex"],"flexDirection":["row"],"alignItems":["center"],"justifyContent":["space-between"],"color":["rgba(0,0,0,1)"],"backgroundColor":["#ecf0f3"],"paddingTop":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingBottom":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingRight":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"paddingLeft":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"]}},"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gspb-DTHotu2","align":"wide"} -->
<div class="brand-panel-wrap alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-7bc0611","inlineCssStyles":".brand-panel-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem));font-weight:500;}","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":".brand-panel-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem));font-weight:500;}","attributes":{"styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem))"],"fontWeight":["500"]}},"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Colors","className":"brand-panel-title","localId":"gsbp-7bc0611","isVariation":"divtext"} -->
<div class="brand-panel-title">Colors</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-NdoVExv","inlineCssStyles":".gspb-NdoVExv{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gspb-NdoVExv","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gspb-NdoVExv"><!-- wp:greenshift-blocks/element {"id":"gspb-7UE8MMY","inlineCssStyles":".brand-panel-subtitle{text-align:right;font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);font-weight:400;color:rgba(127,134,143,1);}","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":".brand-panel-subtitle{text-align:right;font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);font-weight:400;color:rgba(127,134,143,1);}","attributes":{"styleAttributes":{"textAlign":["right"],"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem)"],"fontWeight":[400],"color":["rgba(127,134,143,1)"]}},"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Color styles","className":"brand-panel-subtitle","localId":"gspb-7UE8MMY"} -->
<div class="brand-panel-subtitle">Color styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-gf0ZxC0","inlineCssStyles":".brand-panel-subsub{text-align:right;font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);font-weight:500;color:rgba(0,0,0,1);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);}","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":".brand-panel-subsub{text-align:right;font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);font-weight:500;color:rgba(0,0,0,1);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);}","attributes":{"styleAttributes":{"textAlign":["right"],"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem)"],"fontWeight":[500],"color":["rgba(0,0,0,1)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem)"]}},"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Color Schema","className":"brand-panel-subsub","localId":"gspb-gf0ZxC0"} -->
<div class="brand-panel-subsub">Color Schema</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-ZzWr1uD","inlineCssStyles":".brand-panel-content{color:rgba(0,0,0,1);background-color:rgba(255,255,255,1);margin-top:0px;padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);}@media (max-width: 575.98px){.brand-panel-content{padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);}}","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":".brand-panel-content{color:rgba(0,0,0,1);background-color:rgba(255,255,255,1);margin-top:0px;padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);}@media (max-width: 575.98px){.brand-panel-content{padding-top:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-bottom:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);padding-right:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);padding-left:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);}}","attributes":{"styleAttributes":{"color":["rgba(0,0,0,1)"],"backgroundColor":["rgba(255,255,255,1)"],"marginTop":["0px"],"paddingTop":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)",null,null,"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"paddingBottom":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)",null,null,"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"],"paddingRight":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)",null,null,"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"],"paddingLeft":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)",null,null,"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"]}},"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gspb-ZzWr1uD","align":"wide"} -->
<div class="brand-panel-content alignwide"><!-- wp:greenshift-blocks/element {"id":"gspb-xcmq46f","inlineCssStyles":".gspb-xcmq46f{flex-direction:row;column-gap:20px;row-gap:20px;align-items:stretch;justify-content:space-between;color:rgba(0,0,0,1);display:flex;}.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+1){width:calc(25% - (20px * (4 - 1) / 4));}@media (max-width: 991.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+1){width:calc(50% - (20px * (4 - 1) / 4));}}@media (max-width: 575.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+1){width:100%;}}.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+2){width:calc(25% - (20px * (4 - 1) / 4));}@media (max-width: 991.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+2){width:calc(50% - (20px * (4 - 1) / 4));}}@media (max-width: 575.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+2){width:100%;}}.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+3){width:calc(25% - (20px * (4 - 1) / 4));}@media (max-width: 991.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+3){width:calc(50% - (20px * (4 - 1) / 4));}}@media (max-width: 575.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+3){width:100%;}}.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+4){width:calc(25% - (20px * (4 - 1) / 4));}@media (max-width: 991.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+4){width:calc(50% - (20px * (4 - 1) / 4));}}@media (max-width: 575.98px){.gspb-xcmq46f\u003e*:not(style):nth-of-type(4n+4){width:100%;}}.gspb-xcmq46f{flex-wrap:wrap;}","type":"inner","localId":"gspb-xcmq46f","styleAttributes":{"flexDirection":["row"],"columnGap":["20px"],"rowGap":["20px"],"alignItems":["stretch"],"justifyContent":["space-between"],"color":["rgba(0,0,0,1)"],"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":3,"y":0,"i":"3","moved":false,"static":false}],"cols":4,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1}],"cols":3,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"gridLayoutItems_Extra":4,"display":["flex"],"flexColumns_Extra":4,"flexWidths_Extra":{"desktop":{"name":"25/25/25/25","widths":[25,25,25,25]},"tablet":{"name":"50/50/50/50","widths":[50,50,50,50]},"mobile":{"name":"100/100/100/100","widths":[100,100,100,100]}}}} -->
<div class="gspb-xcmq46f"><!-- wp:greenshift-blocks/element {"id":"gspb-afywK2O","inlineCssStyles":".brand-panel-color-panel{display:flex;flex-direction:column;row-gap:50px;align-items:stretch;justify-content:space-between;border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-style:solid;border-color:#d8dfe378;borde-width:1;color:rgba(0,0,0,1);background-color:rgba(255,255,255,1);padding-top:14.5rem;padding-bottom:1.2rem;padding-right:1.2rem;padding-left:1.2rem;border-width:1px;}.brand-panel-color-panel.whitetextbrand{color:#ffffff;}.brand-panel-color-panel.brand-color-text{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc);}.brand-panel-color-panel.brand-color-text a{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc);}.brand-panel-color-panel.brand-color-text:hover a{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #fffffd);}.brand-panel-color-panel.brand-color-text:hover{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #fffffd);background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover, #15BA3F);}.brand-panel-color-panel:hover .firstcolor{display:none;}.brand-panel-color-panel .hoversecond{display:none;}.brand-panel-color-panel:hover .hoversecond{display:flex;}.gspb-afywK2O{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand, #0FA034);anchor-name:\u002d\u002dpopover_gspb-afywK2O;}","dynamicGClasses":[{"value":"brand-panel-color-panel","type":"local","label":"brand-panel-color-panel","localed":false,"css":".brand-panel-color-panel{display:flex;flex-direction:column;row-gap:50px;align-items:stretch;justify-content:space-between;border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-style:solid;border-color:#d8dfe378;borde-width:1;color:rgba(0,0,0,1);background-color:rgba(255,255,255,1);padding-top:14.5rem;padding-bottom:1.2rem;padding-right:1.2rem;padding-left:1.2rem;border-width:1px;}","attributes":{"styleAttributes":{"display":["flex"],"flexDirection":["column"],"rowGap":["50px"],"alignItems":["stretch"],"justifyContent":["space-between"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderStyle":["solid"],"borderColor":["#d8dfe378"],"bordeWidth":[1],"color":["rgba(0,0,0,1)"],"backgroundColor":["rgba(255,255,255,1)"],"paddingTop":["14.5rem"],"paddingBottom":["1.2rem"],"paddingRight":["1.2rem"],"paddingLeft":["1.2rem"],"borderWidth":["1px"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}},"originalID":"gspb-afywK2O","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":".whitetextbrand","attributes":{"styleAttributes":{"color":["#ffffff"]}},"css":".brand-panel-color-panel.whitetextbrand{color:#ffffff;}"},{"value":".brand-color-text","attributes":{"styleAttributes":{"color":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc)"],"color_A":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc)"],"color_hover":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #fffffd)"],"color_A_hover":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #fffffd)"],"backgroundColor_hover":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover, #15BA3F)"]}},"css":".brand-panel-color-panel.brand-color-text{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc);}.brand-panel-color-panel.brand-color-text a{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc);}.brand-panel-color-panel.brand-color-text:hover a{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #fffffd);}.brand-panel-color-panel.brand-color-text:hover{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #fffffd);background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover, #15BA3F);}"},{"value":" .firstcolor","attributes":[],"css":""},{"value":":hover .firstcolor","attributes":{"styleAttributes":{"display":["none"]}},"css":".brand-panel-color-panel:hover .firstcolor{display:none;}"},{"value":" .hoversecond","attributes":{"styleAttributes":{"display":["none"]}},"css":".brand-panel-color-panel .hoversecond{display:none;}"},{"value":":hover .hoversecond","attributes":{"styleAttributes":{"display":["flex"]}},"css":".brand-panel-color-panel:hover .hoversecond{display:flex;}"}]},{"value":"gs-parent-hover","type":"preset","label":"gs-parent-hover"}],"interactionLayers":[],"type":"inner","className":"brand-panel-color-panel brand-color-text gs-parent-hover","localId":"gspb-afywK2O","dynamicAttributes":[{"name":"popover-control","value":"popover_gspb-afywK2O"}],"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand, #0FA034)"],"anchorName":["\u002d\u002dpopover_gspb-afywK2O"]}} -->
<div class="brand-panel-color-panel brand-color-text gs-parent-hover gspb-afywK2O" popover-control="popover_gspb-afywK2O"><!-- wp:greenshift-blocks/element {"id":"gspb-E4-zRjc","inlineCssStyles":".gspb-E4-zRjc{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"firstcolor","localId":"gspb-E4-zRjc","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="firstcolor gspb-E4-zRjc"><!-- wp:greenshift-blocks/element {"id":"gspb\u002d\u002d7kWTeo","inlineCssStyles":".brand-panel-color-title{text-align:left;font-size:21px;line-height:130%;font-weight:600;}","dynamicGClasses":[{"value":"brand-panel-color-title","type":"local","label":"brand-panel-color-title","localed":false,"css":".brand-panel-color-title{text-align:left;font-size:21px;line-height:130%;font-weight:600;}","attributes":{"styleAttributes":{"textAlign":["left"],"fontSize":["21px"],"lineHeight":["130%"],"fontWeight":[600]}},"originalID":"gspb\u002d\u002d7kWTeo","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Brand Color","className":"brand-panel-color-title","localId":"gspb\u002d\u002d7kWTeo"} -->
<div class="brand-panel-color-title">Brand Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-ITAE0Hv","inlineCssStyles":".gspb-ITAE0Hv{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gspb-ITAE0Hv","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gspb-ITAE0Hv"><!-- wp:greenshift-blocks/element {"id":"gspb-QD6l7PG","inlineCssStyles":".brand-panel-color-color{text-align:left;font-size:18px;line-height:140%;font-weight:400;}","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":".brand-panel-color-color{text-align:left;font-size:18px;line-height:140%;font-weight:400;}","attributes":{"styleAttributes":{"textAlign":["left"],"fontSize":["18px"],"lineHeight":["140%"],"fontWeight":[400]}},"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#0FA034","className":"brand-panel-color-color brandcolor","localId":"gspb-QD6l7PG","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand"}]} -->
<div class="brand-panel-color-color brandcolor" data-var="--wp--preset--color--brand">#0FA034</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-737pHLr","inlineCssStyles":".brand-panel-color-var{text-align:left;font-size:14px;line-height:150%;font-weight:400;opacity:0.4;}","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":".brand-panel-color-var{text-align:left;font-size:14px;line-height:150%;font-weight:400;opacity:0.4;}","attributes":{"styleAttributes":{"textAlign":["left"],"fontSize":["14px"],"lineHeight":["150%"],"fontWeight":[400],"opacity":[0.4]}},"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand","className":"brand-panel-color-var","localId":"gspb-737pHLr"} -->
<div class="brand-panel-color-var">--wp--preset--color--brand</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-77956a8","inlineCssStyles":".gsbp-77956a8{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"hoversecond","localId":"gsbp-77956a8","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="hoversecond gsbp-77956a8"><!-- wp:greenshift-blocks/element {"id":"gsbp-d46f9d1","dynamicGClasses":[],"textContent":"Brand Hover Color","className":"brand-panel-color-title","localId":"gsbp-d46f9d1"} -->
<div class="brand-panel-color-title">Brand Hover Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d068486","inlineCssStyles":".gsbp-d068486{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gsbp-d068486","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-d068486"><!-- wp:greenshift-blocks/element {"id":"gsbp-3e15de9","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":"","attributes":[],"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#15BA3F","className":"brand-panel-color-color hoverbrand brandcolor","localId":"gsbp-3e15de9","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover"}]} -->
<div class="brand-panel-color-color hoverbrand brandcolor" data-var="--wp--preset--color--brand-hover">#15BA3F</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-44c17db","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":"","attributes":[],"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover","className":"brand-panel-color-var","localId":"gsbp-44c17db"} -->
<div class="brand-panel-color-var">--wp--preset--color--brand-hover</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ec1fcc5","inlineCssStyles":".gsbp-ec1fcc5{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0);anchor-name:\u002d\u002dpopover_gspb-afywK2O;}","dynamicGClasses":[{"value":"brand-panel-color-panel","type":"local","label":"brand-panel-color-panel","localed":false,"css":"","attributes":[],"originalID":"gspb-afywK2O","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"interactionLayers":[],"type":"inner","className":"brand-panel-color-panel whitetextbrand","localId":"gsbp-ec1fcc5","dynamicAttributes":[{"name":"popover-control","value":"popover_gspb-afywK2O"}],"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0)"],"anchorName":["\u002d\u002dpopover_gspb-afywK2O"]}} -->
<div class="brand-panel-color-panel whitetextbrand gsbp-ec1fcc5" popover-control="popover_gspb-afywK2O"><!-- wp:greenshift-blocks/element {"id":"gsbp-d0cb355","inlineCssStyles":".gsbp-d0cb355{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"","localId":"gsbp-d0cb355","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-d0cb355"><!-- wp:greenshift-blocks/element {"id":"gsbp-70c19c8","dynamicGClasses":[{"value":"brand-panel-color-title","type":"local","label":"brand-panel-color-title","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002d7kWTeo","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Secondary Color","className":"brand-panel-color-title","localId":"gsbp-70c19c8"} -->
<div class="brand-panel-color-title">Secondary Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b4dbe52","inlineCssStyles":".gsbp-b4dbe52{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gsbp-b4dbe52","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-b4dbe52"><!-- wp:greenshift-blocks/element {"id":"gsbp-37f58d7","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":"","attributes":[],"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#340FA0","className":"brand-panel-color-color brandcolor","localId":"gsbp-37f58d7","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary"}]} -->
<div class="brand-panel-color-color brandcolor" data-var="--wp--preset--color--secondary">#340FA0</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4fb3967","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":"","attributes":[],"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary","className":"brand-panel-color-var","localId":"gsbp-4fb3967"} -->
<div class="brand-panel-color-var">--wp--preset--color--secondary</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-600ad26","inlineCssStyles":".gsbp-600ad26{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-background, #fcfcfc);anchor-name:\u002d\u002dpopover_gspb-afywK2O;border-style:solid;border-width:1px;border-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0);color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text, #333333);}","dynamicGClasses":[{"value":"brand-panel-color-panel","type":"local","label":"brand-panel-color-panel","localed":false,"css":"","attributes":[],"originalID":"gspb-afywK2O","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"interactionLayers":[],"type":"inner","className":"brand-panel-color-panel","localId":"gsbp-600ad26","dynamicAttributes":[{"name":"popover-control","value":"popover_gspb-afywK2O"}],"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-background, #fcfcfc)"],"anchorName":["\u002d\u002dpopover_gspb-afywK2O"],"borderStyle":["solid"],"borderWidth":["1px"],"borderColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0)"],"color":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text, #333333)"]}} -->
<div class="brand-panel-color-panel gsbp-600ad26" popover-control="popover_gspb-afywK2O"><!-- wp:greenshift-blocks/element {"id":"gsbp-d8d3751","inlineCssStyles":".gsbp-d8d3751{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"","localId":"gsbp-d8d3751","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-d8d3751"><!-- wp:greenshift-blocks/element {"id":"gsbp-8724bd0","dynamicGClasses":[{"value":"brand-panel-color-title","type":"local","label":"brand-panel-color-title","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002d7kWTeo","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Card Colors","className":"brand-panel-color-title gsbp-8724bd0","localId":"gsbp-8724bd0"} -->
<div class="brand-panel-color-title gsbp-8724bd0">Card Colors</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1336562","inlineCssStyles":".gsbp-1336562{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gsbp-1336562","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-1336562"><!-- wp:greenshift-blocks/element {"id":"gsbp-486f796","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":"","attributes":[],"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#FCFCFC","className":"brand-panel-color-color brandcolor","localId":"gsbp-486f796","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base"}]} -->
<div class="brand-panel-color-color brandcolor" data-var="--wp--preset--color--card-base">#FCFCFC</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3aece15","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":"","attributes":[],"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base","className":"brand-panel-color-var","localId":"gsbp-3aece15"} -->
<div class="brand-panel-color-var">--wp--preset--color--card-base</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7cca01c","inlineCssStyles":".gsbp-7cca01c{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground, #f9f9f9);anchor-name:\u002d\u002dpopover_gspb-afywK2O;border-style:solid;border-width:1px;border-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0);color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtextcolor, #333333);}","dynamicGClasses":[{"value":"brand-panel-color-panel","type":"local","label":"brand-panel-color-panel","localed":false,"css":"","attributes":[],"originalID":"gspb-afywK2O","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"interactionLayers":[],"type":"inner","className":"brand-panel-color-panel","localId":"gsbp-7cca01c","dynamicAttributes":[{"name":"popover-control","value":"popover_gspb-afywK2O"}],"styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground, #f9f9f9)"],"anchorName":["\u002d\u002dpopover_gspb-afywK2O"],"borderStyle":["solid"],"borderWidth":["1px"],"borderColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0)"],"color":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtextcolor, #333333)"]}} -->
<div class="brand-panel-color-panel gsbp-7cca01c" popover-control="popover_gspb-afywK2O"><!-- wp:greenshift-blocks/element {"id":"gsbp-7731da7","inlineCssStyles":".gsbp-7731da7{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:flex-start;}","type":"inner","className":"","localId":"gsbp-7731da7","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-7731da7"><!-- wp:greenshift-blocks/element {"id":"gsbp-65f999b","inlineCssStyles":".gsbp-65f999b{color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dheading, #111111);}","dynamicGClasses":[{"value":"brand-panel-color-title","type":"local","label":"brand-panel-color-title","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002d7kWTeo","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Content Colors","className":"brand-panel-color-title gsbp-8724bd0","localId":"gsbp-65f999b","styleAttributes":{"color":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dheading, #111111)"]}} -->
<div class="brand-panel-color-title gsbp-8724bd0 gsbp-65f999b">Content Colors</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7bc1763","inlineCssStyles":".gsbp-7bc1763{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;}","type":"inner","localId":"gsbp-7bc1763","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"]}} -->
<div class="gsbp-7bc1763"><!-- wp:greenshift-blocks/element {"id":"gsbp-b060455","dynamicGClasses":[{"value":"brand-panel-color-color","type":"local","label":"brand-panel-color-color","localed":false,"css":"","attributes":[],"originalID":"gspb-QD6l7PG","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"#F9F9F9","className":"brand-panel-color-color brandcolor","localId":"gsbp-b060455","dynamicAttributes":[{"name":"data-var","value":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground"}]} -->
<div class="brand-panel-color-color brandcolor" data-var="--wp--preset--color--background">#F9F9F9</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7701d5e","dynamicGClasses":[{"value":"brand-panel-color-var","type":"local","label":"brand-panel-color-var","localed":false,"css":"","attributes":[],"originalID":"gspb-737pHLr","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground","className":"brand-panel-color-var","localId":"gsbp-7701d5e"} -->
<div class="brand-panel-color-var">--wp--preset--color--background</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0383712","inlineCssStyles":".gsbp-0383712{font-size:20px;font-weight:600;margin-top:40px;margin-bottom:40px;}","textContent":"Overview","localId":"gsbp-0383712","styleAttributes":{"fontSize":["20px"],"fontWeight":["600"],"marginTop":["40px"],"marginBottom":["40px"]},"isVariation":"divtext"} -->
<div class="gsbp-0383712">Overview</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-44f14a4","inlineCssStyles":"@media (max-width: 575.98px){.gsbp-44f14a4 td{line-height:19px;}}@media (max-width: 575.98px){.gsbp-44f14a4{display:block;overflow-x:auto;}}.gsbp-44f14a4{border-collapse:collapse;table-layout:fixed;}.gsbp-44f14a4 td{padding-top:10px;padding-bottom:10px;padding-right:12px;padding-left:12px;border-style:solid;border-width:1px;border-color:#00000012;font-size:14px;}.gsbp-44f14a4 th{padding-top:6px;padding-bottom:6px;padding-right:12px;padding-left:12px;border-style:solid;border-width:1px;border-color:#00000012;font-size:16px;background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dlightbg, #cddceb21);}.table-colors .color-table-color{margin-right:auto;margin-left:auto;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);}.table-colors .color-title-table{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);font-weight:600;}.table-colors .color-var-table{line-height:1.2rem;opacity:0.4;}.gsbp-44f14a4{width:100%;}","dynamicGClasses":[{"value":"table-colors","type":"local","label":"table-colors","localed":false,"css":"","attributes":[],"originalID":"gsbp-44f14a4","originalBlock":"greenshift-blocks/element","tag":"table","selectors":[{"value":" .color-table-color","attributes":{"styleAttributes":{"marginRight":["auto"],"marginLeft":["auto"],"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px)"],"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}},"css":".table-colors .color-table-color{margin-right:auto;margin-left:auto;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%);}"},{"value":" .color-title-table","attributes":{"styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem)"],"fontWeight":["600"]}},"css":".table-colors .color-title-table{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);font-weight:600;}"},{"value":" .color-var-table","attributes":{"styleAttributes":{"lineHeight":["1.2rem"],"opacity":[0.4]}},"css":".table-colors .color-var-table{line-height:1.2rem;opacity:0.4;}"},{"value":" .color-table-desc","attributes":[],"css":""}]}],"tag":"table","type":"inner","className":"table-colors","localId":"gsbp-44f14a4","tableAttributes":{"table":{"responsive":"yes"},"td":{"typography":{"textShadow":[],"line_height":[null,null,null,"19px"]}}},"tableStyles":{"table":{"layout":"fixed","border":"collapse"},"responsive":"yes","td":{"paddingTop":["10px"],"paddingBottom":["10px"],"paddingRight":["12px"],"paddingLeft":["12px"],"borderStyle":"solid","borderWidth":"1px","borderColor":"#00000012","fontSize":["14px"]},"th":{"paddingTop":["6px"],"paddingBottom":["6px"],"paddingRight":["12px"],"paddingLeft":["12px"],"borderStyle":"solid","borderWidth":"1px","borderColor":"#00000012","fontSize":["16px"],"backgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dlightbg, #cddceb21)"}},"styleAttributes":{"width":["100%"]}} -->
<table class="table-colors gsbp-44f14a4"><!-- wp:greenshift-blocks/element {"id":"gsbp-c4dc593","tag":"tr","type":"inner","localId":"gsbp-c4dc593"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-c9faf34","inlineCssStyles":"table td.gsbp-c9faf34{width:75px;}","tag":"td","type":"inner","localId":"gsbp-c9faf34","styleAttributes":{"width":["75px"]}} -->
<td class="gsbp-c9faf34"><!-- wp:greenshift-blocks/element {"id":"gsbp-2133cae","inlineCssStyles":".gsbp-2133cae{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand, #0FA034);}","type":"no","className":"color-table-color","localId":"gsbp-2133cae","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand, #0FA034)"]}} -->
<div class="color-table-color gsbp-2133cae"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-82f9eb8","tag":"td","type":"inner","localId":"gsbp-82f9eb8"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-2b52ab3","textContent":"Brand Color","className":"color-title-table","localId":"gsbp-2b52ab3","isVariation":"divtext"} -->
<div class="color-title-table">Brand Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f7db290","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand","className":"color-var-table","localId":"gsbp-f7db290","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--brand</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d87e378","tag":"td","type":"inner","localId":"gsbp-d87e378"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-7216ecf","textContent":"Main Color. Use in buttons and highlighted elements","className":"color-table-desc","localId":"gsbp-7216ecf","isVariation":"divtext"} -->
<div class="color-table-desc">Main Color. Use in buttons and highlighted elements</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8b102f6","tag":"tr","type":"inner","localId":"gsbp-8b102f6"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-91cc442","tag":"td","type":"inner","localId":"gsbp-91cc442"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-4bf1480","inlineCssStyles":".gsbp-4bf1480{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover, #15BA3F);}","type":"no","className":"color-table-color","localId":"gsbp-4bf1480","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover, #15BA3F)"]}} -->
<div class="color-table-color gsbp-4bf1480"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f0641c7","tag":"td","type":"inner","localId":"gsbp-f0641c7"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-92ce6ba","textContent":"Brand Hover Color","className":"color-title-table","localId":"gsbp-92ce6ba","isVariation":"divtext"} -->
<div class="color-title-table">Brand Hover Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-de7836d","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbrand-hover","className":"color-var-table","localId":"gsbp-de7836d","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--brand-hover</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-6fbb50f","tag":"td","type":"inner","localId":"gsbp-6fbb50f"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-6add055","textContent":"Color for hover on Brand Color.","className":"color-table-desc","localId":"gsbp-6add055","isVariation":"divtext"} -->
<div class="color-table-desc">Color for hover on Brand Color.</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-850f57a","tag":"tr","type":"inner","localId":"gsbp-850f57a"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-ee41b25","tag":"td","type":"inner","localId":"gsbp-ee41b25"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-37cb552","inlineCssStyles":".gsbp-37cb552{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0);}","type":"no","className":"color-table-color","localId":"gsbp-37cb552","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary, #340fa0)"]}} -->
<div class="color-table-color gsbp-37cb552"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e94b123","tag":"td","type":"inner","localId":"gsbp-e94b123"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-1081c50","textContent":"Secondary Color","className":"color-title-table","localId":"gsbp-1081c50","isVariation":"divtext"} -->
<div class="color-title-table">Secondary Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d57008c","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dsecondary","className":"color-var-table","localId":"gsbp-d57008c","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--secondary</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0e7850e","tag":"td","type":"inner","localId":"gsbp-0e7850e"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-878afcb","textContent":"Secondary Color. Use in secondary buttons and as accent for small text","className":"color-table-desc","localId":"gsbp-878afcb","isVariation":"divtext"} -->
<div class="color-table-desc">Secondary Color. Use in secondary buttons and as accent for small text</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-bd2ea2d","tag":"tr","type":"inner","localId":"gsbp-bd2ea2d"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-2fd1b35","tag":"td","type":"inner","localId":"gsbp-2fd1b35"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-da194cb","inlineCssStyles":".gsbp-da194cb{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-da194cb","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand, #fffffc)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-da194cb"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1661894","tag":"td","type":"inner","localId":"gsbp-1661894"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-c4f0bb6","textContent":"Text on Brand Color","className":"color-title-table","localId":"gsbp-c4f0bb6","isVariation":"divtext"} -->
<div class="color-title-table">Text on Brand Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-71208ab","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand","className":"color-var-table","localId":"gsbp-71208ab","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--text-on-brand</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-34a0f94","tag":"td","type":"inner","localId":"gsbp-34a0f94"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-8a7205f","textContent":"Color of Text that placed on Brand Color","className":"color-table-desc","localId":"gsbp-8a7205f","isVariation":"divtext"} -->
<div class="color-table-desc">Color of Text that placed on Brand Color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ace9e6d","tag":"tr","type":"inner","localId":"gsbp-ace9e6d"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-f3d43e7","tag":"td","type":"inner","localId":"gsbp-f3d43e7"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-8c939cc","inlineCssStyles":".gsbp-8c939cc{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #fffffd);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-8c939cc","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover, #fffffd)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-8c939cc"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d414b14","tag":"td","type":"inner","localId":"gsbp-d414b14"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-39d44b4","textContent":"Text on Brand Hover Color","className":"color-title-table","localId":"gsbp-39d44b4","isVariation":"divtext"} -->
<div class="color-title-table">Text on Brand Hover Color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ffb65d8","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtext-on-brand-hover","className":"color-var-table","localId":"gsbp-ffb65d8","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--text-on-brand-hover</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9cab06e","tag":"td","type":"inner","localId":"gsbp-9cab06e"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-f69085c","textContent":"Color of Text that placed on Brand Hover Color","className":"color-table-desc","localId":"gsbp-f69085c","isVariation":"divtext"} -->
<div class="color-table-desc">Color of Text that placed on Brand Hover Color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-498b3c8","tag":"tr","type":"inner","localId":"gsbp-498b3c8"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-2455eed","tag":"td","type":"inner","localId":"gsbp-2455eed"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-6c759eb","inlineCssStyles":".gsbp-6c759eb{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base, #fcfcfc);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-6c759eb","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base, #fcfcfc)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-6c759eb"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-50d0264","tag":"td","type":"inner","localId":"gsbp-50d0264"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-f8c7fe2","textContent":"Card Background","className":"color-title-table","localId":"gsbp-f8c7fe2","isVariation":"divtext"} -->
<div class="color-title-table">Card Background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c5864c8","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-base","className":"color-var-table","localId":"gsbp-c5864c8","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--card-base</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-75567e7","tag":"td","type":"inner","localId":"gsbp-75567e7"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-580fda8","textContent":"Background color of cards, product cards and grouped content","className":"color-table-desc","localId":"gsbp-580fda8","isVariation":"divtext"} -->
<div class="color-table-desc">Background color of cards, product cards and grouped content</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a896bb6","tag":"tr","type":"inner","localId":"gsbp-a896bb6"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-e0d7dfd","tag":"td","type":"inner","localId":"gsbp-e0d7dfd"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-0debe9b","inlineCssStyles":".gsbp-0debe9b{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0);}","type":"no","className":"color-table-color","localId":"gsbp-0debe9b","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border, #f0f0f0)"]}} -->
<div class="color-table-color gsbp-0debe9b"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-794e9a6","tag":"td","type":"inner","localId":"gsbp-794e9a6"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-591171f","textContent":"Card Border","className":"color-title-table","localId":"gsbp-591171f","isVariation":"divtext"} -->
<div class="color-title-table">Card Border</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-82472dd","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-border","className":"color-var-table","localId":"gsbp-82472dd","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--card-border</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1e52b55","tag":"td","type":"inner","localId":"gsbp-1e52b55"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-57d25be","textContent":"Border for cards","className":"color-table-desc","localId":"gsbp-57d25be","isVariation":"divtext"} -->
<div class="color-table-desc">Border for cards</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-924db58","tag":"tr","type":"inner","localId":"gsbp-924db58"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-46cf9ae","tag":"td","type":"inner","localId":"gsbp-46cf9ae"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-c821bda","inlineCssStyles":".gsbp-c821bda{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text, #333333);}","type":"no","className":"color-table-color","localId":"gsbp-c821bda","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text, #333333)"]}} -->
<div class="color-table-color gsbp-c821bda"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1d0fd4a","tag":"td","type":"inner","localId":"gsbp-1d0fd4a"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-6a7c606","textContent":"Card Text","className":"color-title-table","localId":"gsbp-6a7c606","isVariation":"divtext"} -->
<div class="color-title-table">Card Text</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e45ac7a","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-textcolor","className":"color-var-table","localId":"gsbp-e45ac7a","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--card-textcolor</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c7ea0ec","tag":"td","type":"inner","localId":"gsbp-c7ea0ec"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5decbdf","textContent":"Text color for cards and grouped content","className":"color-table-desc","localId":"gsbp-5decbdf","isVariation":"divtext"} -->
<div class="color-table-desc">Text color for cards and grouped content</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0e218a5","tag":"tr","type":"inner","localId":"gsbp-0e218a5"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-f5a6dad","tag":"td","type":"inner","localId":"gsbp-f5a6dad"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-fe16f68","inlineCssStyles":".gsbp-fe16f68{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground, #f9f9f9);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-fe16f68","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground, #f9f9f9)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-fe16f68"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-162f0d3","tag":"td","type":"inner","localId":"gsbp-162f0d3"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-e3a6b09","textContent":"Background","className":"color-title-table","localId":"gsbp-e3a6b09","isVariation":"divtext"} -->
<div class="color-title-table">Background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-def3b11","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbackground","className":"color-var-table","localId":"gsbp-def3b11","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--background</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9cc571a","tag":"td","type":"inner","localId":"gsbp-9cc571a"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-1b1853e","textContent":"Main Background of site (applied on body tag)","className":"color-table-desc","localId":"gsbp-1b1853e","isVariation":"divtext"} -->
<div class="color-table-desc">Main Background of site (applied on body tag)</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-35f19b6","tag":"tr","type":"inner","localId":"gsbp-35f19b6"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-9f67a1e","tag":"td","type":"inner","localId":"gsbp-9f67a1e"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-7fbc996","inlineCssStyles":".gsbp-7fbc996{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtextcolor, #333333);}","type":"no","className":"color-table-color","localId":"gsbp-7fbc996","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dtextcolor, #333333)"]}} -->
<div class="color-table-color gsbp-7fbc996"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9f8abda","tag":"td","type":"inner","localId":"gsbp-9f8abda"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-27855db","textContent":"Content Text","className":"color-title-table","localId":"gsbp-27855db","isVariation":"divtext"} -->
<div class="color-title-table">Content Text</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-494bbbd","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcard-text","className":"color-var-table","localId":"gsbp-494bbbd","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--card-text</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b9c65f3","tag":"td","type":"inner","localId":"gsbp-b9c65f3"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-ab73e1b","textContent":"Main text color of content (applied on body tag)","className":"color-table-desc","localId":"gsbp-ab73e1b","isVariation":"divtext"} -->
<div class="color-table-desc">Main text color of content (applied on body tag)</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-47b1369","tag":"tr","type":"inner","localId":"gsbp-47b1369"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-3938206","tag":"td","type":"inner","localId":"gsbp-3938206"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-971d2da","inlineCssStyles":".gsbp-971d2da{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-971d2da","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-971d2da"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0504558","tag":"td","type":"inner","localId":"gsbp-0504558"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-97c8fc0","textContent":"Border","className":"color-title-table","localId":"gsbp-97c8fc0","isVariation":"divtext"} -->
<div class="color-title-table">Border</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-607d12f","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder","className":"color-var-table","localId":"gsbp-607d12f","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--border</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8eb5a5a","tag":"td","type":"inner","localId":"gsbp-8eb5a5a"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-eefc289","textContent":"Light transparent Borders. Use for inputs, forms, bordered content","className":"color-table-desc","localId":"gsbp-eefc289","isVariation":"divtext"} -->
<div class="color-table-desc">Light transparent Borders. Use for inputs, forms, bordered content</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-6d160c8","tag":"tr","type":"inner","localId":"gsbp-6d160c8"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-7d08c5d","tag":"td","type":"inner","localId":"gsbp-7d08c5d"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-4e7cf14","inlineCssStyles":".gsbp-4e7cf14{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase, #000001);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-4e7cf14","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase, #000001)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-4e7cf14"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9ac3dd1","tag":"td","type":"inner","localId":"gsbp-9ac3dd1"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-01a99a2","textContent":"Base","className":"color-title-table","localId":"gsbp-01a99a2","isVariation":"divtext"} -->
<div class="color-title-table">Base</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7250c3e","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dbase","className":"color-var-table","localId":"gsbp-7250c3e","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--base</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-cff3094","tag":"td","type":"inner","localId":"gsbp-cff3094"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-26faf77","textContent":"Dark base color. Use where you need flat dark color","className":"color-table-desc","localId":"gsbp-26faf77","isVariation":"divtext"} -->
<div class="color-table-desc">Dark base color. Use where you need flat dark color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e282d0c","tag":"tr","type":"inner","localId":"gsbp-e282d0c"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-7cc2093","tag":"td","type":"inner","localId":"gsbp-7cc2093"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-2fe59b1","inlineCssStyles":".gsbp-2fe59b1{background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-2fe59b1","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-2fe59b1"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-bdea81a","tag":"td","type":"inner","localId":"gsbp-bdea81a"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-3f17c99","textContent":"Contrast","className":"color-title-table","localId":"gsbp-3f17c99","isVariation":"divtext"} -->
<div class="color-title-table">Contrast</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0c25c03","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dcontrast","className":"color-var-table","localId":"gsbp-0c25c03","isVariation":"divtext"} -->
<div class="color-var-table">--wp--preset--color--contrast</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-aabb1ea","tag":"td","type":"inner","localId":"gsbp-aabb1ea"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5d8f20b","textContent":"White base color. Use where you need flat white color","className":"color-table-desc","localId":"gsbp-5d8f20b","isVariation":"divtext"} -->
<div class="color-table-desc">White base color. Use where you need flat white color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element --></table>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1a80c0c","anchor":"typography","type":"inner","localId":"gsbp-1a80c0c","align":"wide","metadata":{"name":"Typography"}} -->
<div class="alignwide" id="typography"><!-- wp:greenshift-blocks/element {"id":"gsbp-0238488","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-0238488","align":"wide","metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-77072a8","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Typography","className":"brand-panel-title","localId":"gsbp-77072a8","isVariation":"divtext"} -->
<div class="brand-panel-title">Typography</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-13f0138","inlineCssStyles":".gsbp-13f0138{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-13f0138","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-13f0138"><!-- wp:greenshift-blocks/element {"id":"gsbp-4f1edc5","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Text styles","className":"brand-panel-subtitle","localId":"gsbp-4f1edc5"} -->
<div class="brand-panel-subtitle">Text styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1f396e7","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Content Text Sizes","className":"brand-panel-subsub","localId":"gsbp-1f396e7"} -->
<div class="brand-panel-subsub">Content Text Sizes</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e2580d2","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-e2580d2","align":"wide","metadata":{"name":"Content"}} -->
<div class="brand-panel-content alignwide"><!-- wp:greenshift-blocks/element {"id":"gspb\u002d\u002doGyy2B","inlineCssStyles":".text-styles{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:center;color:rgba(0,0,0,1);margin-bottom:40px;}.text-styles .text-variable{opacity:0.4;line-height:1.3rem;font-size:16px;}","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":".text-styles{display:flex;flex-direction:column;column-gap:16px;row-gap:16px;justify-content:center;color:rgba(0,0,0,1);margin-bottom:40px;}","attributes":{"styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["16px"],"rowGap":["16px"],"justifyContent":["center"],"color":["rgba(0,0,0,1)"],"marginBottom":["40px"]}},"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" .text-title","attributes":[],"css":""},{"value":" .text-group","attributes":[],"css":""},{"value":" .text-value","attributes":[],"css":""},{"value":" .text-variable","attributes":{"styleAttributes":{"opacity":[0.4],"lineHeight":["1.3rem"],"fontSize":["16px"]}},"css":".text-styles .text-variable{opacity:0.4;line-height:1.3rem;font-size:16px;}"}]}],"type":"inner","className":"text-styles","localId":"gspb\u002d\u002doGyy2B"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gspb-iOI7Hih","inlineCssStyles":".gspb-iOI7Hih{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgod, clamp(3.5rem, 12vw, 15rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgod, clamp(4.2rem, 12.2vw, 20rem));}","textContent":"God","className":"text-title","localId":"gspb-iOI7Hih","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgod, clamp(3.5rem, 12vw, 15rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgod, clamp(4.2rem, 12.2vw, 20rem))"]}} -->
<div class="text-title gspb-iOI7Hih">God</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-RlKVGa3","type":"inner","className":"text-group","localId":"gspb-RlKVGa3"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gspb-b1d_hgH","textContent":"clamp(3.5rem, 12vw, 15rem) / clamp(4.2rem, 12.2vw, 20rem) ","className":"text-value","localId":"gspb-b1d_hgH"} -->
<div class="text-value">clamp(3.5rem, 12vw, 15rem) / clamp(4.2rem, 12.2vw, 20rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gspb-vhI5xzF","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgod / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgod ","className":"text-variable","localId":"gspb-vhI5xzF"} -->
<div class="text-variable">--wp--preset--font-size--god / --wp--custom--line-height--god </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7fda8c5","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-7fda8c5"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-355e3f2","inlineCssStyles":".gsbp-355e3f2{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dcolossal, clamp(3.4rem, 9vw, 12rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dcolossal, clamp(4.1rem, 9.35vw, 17rem));}","textContent":"Colossal","className":"text-title","localId":"gsbp-355e3f2","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dcolossal, clamp(3.4rem, 9vw, 12rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dcolossal, clamp(4.1rem, 9.35vw, 17rem))"]}} -->
<div class="text-title gsbp-355e3f2">Colossal</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8287ebf","type":"inner","className":"text-group","localId":"gsbp-8287ebf"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-329fc49","textContent":"clamp(3.4rem, 9vw, 12rem) / clamp(4.1rem, 9.35vw, 17rem) ","className":"text-value","localId":"gsbp-329fc49"} -->
<div class="text-value">clamp(3.4rem, 9vw, 12rem) / clamp(4.1rem, 9.35vw, 17rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-95bbbff","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dcolossal / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dcolossal ","className":"text-variable","localId":"gsbp-95bbbff"} -->
<div class="text-variable">--wp--preset--font-size--colossal / --wp--custom--line-height--colossal </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giant-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-giant-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-giant-title","inlineCssStyles":".gsbp-giant-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiant, clamp(3.2rem, 6.2vw, 6.5rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiant, clamp(4.2rem, 6.2vw, 7rem));}","textContent":"Giant","className":"text-title","localId":"gsbp-giant-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiant, clamp(3.2rem, 6.2vw, 6.5rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiant, clamp(4.2rem, 6.2vw, 7rem))"]}} -->
<div class="text-title gsbp-giant-title">Giant</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giant-group","type":"inner","className":"text-group","localId":"gsbp-giant-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-giant-value","textContent":"clamp(3.2rem, 6.2vw, 6.5rem) / clamp(4.2rem, 6.2vw, 7rem) ","className":"text-value","localId":"gsbp-giant-value"} -->
<div class="text-value">clamp(3.2rem, 6.2vw, 6.5rem) / clamp(4.2rem, 6.2vw, 7rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giant-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiant / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiant ","className":"text-variable","localId":"gsbp-giant-var"} -->
<div class="text-variable">--wp--preset--font-size--giant / --wp--custom--line-height--giant </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giga-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-giga-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-giga-title","inlineCssStyles":".gsbp-giga-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiga, clamp(3rem, 5vw, 4.5rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiga, clamp(4rem, 6vw, 5rem));}","textContent":"Giga","className":"text-title","localId":"gsbp-giga-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiga, clamp(3rem, 5vw, 4.5rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiga, clamp(4rem, 6vw, 5rem))"]}} -->
<div class="text-title gsbp-giga-title">Giga</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giga-group","type":"inner","className":"text-group","localId":"gsbp-giga-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-giga-value","textContent":"clamp(3rem, 5vw, 4.5rem) / clamp(4rem, 6vw, 5rem) ","className":"text-value","localId":"gsbp-giga-value"} -->
<div class="text-value">clamp(3rem, 5vw, 4.5rem) / clamp(4rem, 6vw, 5rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-giga-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgiga / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgiga ","className":"text-variable","localId":"gsbp-giga-var"} -->
<div class="text-variable">--wp--preset--font-size--giga / --wp--custom--line-height--giga </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-grand-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-grand-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-grand-title","inlineCssStyles":".gsbp-grand-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgrand, clamp(2.2rem, 4vw, 2.8rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgrand, clamp(2.75rem, 4.7vw, 3.5rem));}","textContent":"Grand","className":"text-title","localId":"gsbp-grand-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgrand, clamp(2.2rem, 4vw, 2.8rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgrand, clamp(2.75rem, 4.7vw, 3.5rem))"]}} -->
<div class="text-title gsbp-grand-title">Grand</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-grand-group","type":"inner","className":"text-group","localId":"gsbp-grand-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-grand-value","textContent":"clamp(2.2rem, 4vw, 2.8rem) / clamp(2.75rem, 4.7vw, 3.5rem) ","className":"text-value","localId":"gsbp-grand-value"} -->
<div class="text-value">clamp(2.2rem, 4vw, 2.8rem) / clamp(2.75rem, 4.7vw, 3.5rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-grand-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dgrand / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dgrand ","className":"text-variable","localId":"gsbp-grand-var"} -->
<div class="text-variable">--wp--preset--font-size--grand / --wp--custom--line-height--grand </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-high-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-high-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-high-title","inlineCssStyles":".gsbp-high-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dhigh, clamp(1.9rem, 3.2vw, 2.4rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dhigh, clamp(2.5rem, 3.7vw, 3rem));}","textContent":"High","className":"text-title","localId":"gsbp-high-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dhigh, clamp(1.9rem, 3.2vw, 2.4rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dhigh, clamp(2.5rem, 3.7vw, 3rem))"]}} -->
<div class="text-title gsbp-high-title">High</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-high-group","type":"inner","className":"text-group","localId":"gsbp-high-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-high-value","textContent":"clamp(1.9rem, 3.2vw, 2.4rem) / clamp(2.5rem, 3.7vw, 3rem) ","className":"text-value","localId":"gsbp-high-value"} -->
<div class="text-value">clamp(1.9rem, 3.2vw, 2.4rem) / clamp(2.5rem, 3.7vw, 3rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-high-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dhigh / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dhigh ","className":"text-variable","localId":"gsbp-high-var"} -->
<div class="text-variable">--wp--preset--font-size--high / --wp--custom--line-height--high </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-xxl-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-title","inlineCssStyles":".gsbp-xxl-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxxl, clamp(1.75rem, 3vw, 2.2rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxxl, clamp(2.4rem, 3.55vw, 2.75rem));}","textContent":"XX Large","className":"text-title","localId":"gsbp-xxl-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxxl, clamp(1.75rem, 3vw, 2.2rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxxl, clamp(2.4rem, 3.55vw, 2.75rem))"]}} -->
<div class="text-title gsbp-xxl-title">XX Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-group","type":"inner","className":"text-group","localId":"gsbp-xxl-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-value","textContent":"clamp(1.75rem, 3vw, 2.2rem) / clamp(2.4rem, 3.55vw, 2.75rem) ","className":"text-value","localId":"gsbp-xxl-value"} -->
<div class="text-value">clamp(1.75rem, 3vw, 2.2rem) / clamp(2.4rem, 3.55vw, 2.75rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xxl-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxxl / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxxl ","className":"text-variable","localId":"gsbp-xxl-var"} -->
<div class="text-variable">--wp--preset--font-size--xxl / --wp--custom--line-height--xxl </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xl-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-xl-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-xl-title","inlineCssStyles":".gsbp-xl-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem));line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem));}","textContent":"X Large","className":"text-title","localId":"gsbp-xl-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl, clamp(1.6rem, 2.75vw, 1.9rem))"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl, clamp(2.3rem, 3.45vw, 2.6rem))"]}} -->
<div class="text-title gsbp-xl-title">X Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xl-group","type":"inner","className":"text-group","localId":"gsbp-xl-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-xl-value","textContent":"clamp(1.6rem, 2.75vw, 1.9rem) / clamp(2.3rem, 3.45vw, 2.6rem) ","className":"text-value","localId":"gsbp-xl-value"} -->
<div class="text-value">clamp(1.6rem, 2.75vw, 1.9rem) / clamp(2.3rem, 3.45vw, 2.6rem) </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xl-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxl / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxl ","className":"text-variable","localId":"gsbp-xl-var"} -->
<div class="text-variable">--wp--preset--font-size--xl / --wp--custom--line-height--xl </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-l-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-l-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-l-title","inlineCssStyles":".gsbp-l-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dl, 1.55rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dl, 2.37rem);}","textContent":"Large","className":"text-title","localId":"gsbp-l-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dl, 1.55rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dl, 2.37rem)"]}} -->
<div class="text-title gsbp-l-title">Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-l-group","type":"inner","className":"text-group","localId":"gsbp-l-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-l-value","textContent":"1.55rem / 2.37rem ","className":"text-value","localId":"gsbp-l-value"} -->
<div class="text-value">1.55rem / 2.37rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-l-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dl / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dl ","className":"text-variable","localId":"gsbp-l-var"} -->
<div class="text-variable">--wp--preset--font-size--l / --wp--custom--line-height--l </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-m-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-m-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-m-title","inlineCssStyles":".gsbp-m-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dm, 1.35rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dm, 2.1rem);}","textContent":"Medium","className":"text-title","localId":"gsbp-m-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dm, 1.35rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dm, 2.1rem)"]}} -->
<div class="text-title gsbp-m-title">Medium</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-m-group","type":"inner","className":"text-group","localId":"gsbp-m-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-m-value","textContent":"1.35rem / 2.1rem ","className":"text-value","localId":"gsbp-m-value"} -->
<div class="text-value">1.35rem / 2.1rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-m-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dm / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dm ","className":"text-variable","localId":"gsbp-m-var"} -->
<div class="text-variable">--wp--preset--font-size--m / --wp--custom--line-height--m </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-r-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-r-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-r-title","inlineCssStyles":".gsbp-r-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dr, 1.2rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dr, 1.9rem);}","textContent":"Regular","className":"text-title","localId":"gsbp-r-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dr, 1.2rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dr, 1.9rem)"]}} -->
<div class="text-title gsbp-r-title">Regular</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-r-group","type":"inner","className":"text-group","localId":"gsbp-r-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-r-value","textContent":"1.2rem / 1.9rem ","className":"text-value","localId":"gsbp-r-value"} -->
<div class="text-value">1.2rem / 1.9rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-r-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dr / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dr ","className":"text-variable","localId":"gsbp-r-var"} -->
<div class="text-variable">--wp--preset--font-size--r / --wp--custom--line-height--r </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-s-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-s-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-s-title","inlineCssStyles":".gsbp-s-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem);}","textContent":"Small","className":"text-title","localId":"gsbp-s-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds, 1rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds, 1.4rem)"]}} -->
<div class="text-title gsbp-s-title">Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-s-group","type":"inner","className":"text-group","localId":"gsbp-s-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-s-value","textContent":"1rem / 1.4rem ","className":"text-value","localId":"gsbp-s-value"} -->
<div class="text-value">1rem / 1.4rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-s-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002ds / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002ds ","className":"text-variable","localId":"gsbp-s-var"} -->
<div class="text-variable">--wp--preset--font-size--s / --wp--custom--line-height--s </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xs-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-xs-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-xs-title","inlineCssStyles":".gsbp-xs-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxs, 0.85rem);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxs, 1.15rem);}","textContent":"X Small","className":"text-title","localId":"gsbp-xs-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxs, 0.85rem)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxs, 1.15rem)"]}} -->
<div class="text-title gsbp-xs-title">X Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xs-group","type":"inner","className":"text-group","localId":"gsbp-xs-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-xs-value","textContent":"0.85rem / 1.15rem ","className":"text-value","localId":"gsbp-xs-value"} -->
<div class="text-value">0.85rem / 1.15rem </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-xs-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dxs / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dxs ","className":"text-variable","localId":"gsbp-xs-var"} -->
<div class="text-variable">--wp--preset--font-size--xs / --wp--custom--line-height--xs </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-mini-main","dynamicGClasses":[{"value":"text-styles","type":"local","label":"text-styles","localed":false,"css":"","attributes":[],"originalID":"gspb\u002d\u002doGyy2B","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"text-styles","localId":"gsbp-mini-main"} -->
<div class="text-styles"><!-- wp:greenshift-blocks/element {"id":"gsbp-mini-title","inlineCssStyles":".gsbp-mini-title{font-size:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dmini, 11px);line-height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dmini, 14px);}","textContent":"Mini","className":"text-title","localId":"gsbp-mini-title","styleAttributes":{"fontSize":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dmini, 11px)"],"lineHeight":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dmini, 14px)"]}} -->
<div class="text-title gsbp-mini-title">Mini</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-mini-group","type":"inner","className":"text-group","localId":"gsbp-mini-group"} -->
<div class="text-group"><!-- wp:greenshift-blocks/element {"id":"gsbp-mini-value","textContent":"11px / 14px ","className":"text-value","localId":"gsbp-mini-value"} -->
<div class="text-value">11px / 14px </div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-mini-var","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dfont-size\u002d\u002dmini / \u002d\u002dwp\u002d\u002dcustom\u002d\u002dline-height\u002d\u002dmini ","className":"text-variable","localId":"gsbp-mini-var"} -->
<div class="text-variable">--wp--preset--font-size--mini / --wp--custom--line-height--mini </div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9386f38","anchor":"spacing","type":"inner","localId":"gsbp-9386f38","align":"wide","metadata":{"name":"Spacing"}} -->
<div class="alignwide" id="spacing"><!-- wp:greenshift-blocks/element {"id":"gsbp-71b8e69","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-71b8e69","align":"wide","metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-35ba49d","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Spacing","className":"brand-panel-title","localId":"gsbp-35ba49d","isVariation":"divtext"} -->
<div class="brand-panel-title">Spacing</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-257c5ad","inlineCssStyles":".gsbp-257c5ad{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-257c5ad","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-257c5ad"><!-- wp:greenshift-blocks/element {"id":"gsbp-838296b","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Spacing styles","className":"brand-panel-subtitle","localId":"gsbp-838296b"} -->
<div class="brand-panel-subtitle">Spacing styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2cc3f54","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"In and Our Spacing","className":"brand-panel-subsub","localId":"gsbp-2cc3f54"} -->
<div class="brand-panel-subsub">In and Our Spacing</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-34af54e","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-34af54e","align":"wide","metadata":{"name":"Content"}} -->
<div class="brand-panel-content alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-sp01","inlineCssStyles":".spacing-preset{display:flex;align-items:center;gap:20px;margin-bottom:15px;}@media (max-width: 575.98px){.spacing-preset{flex-direction:column;row-gap:5px;}}.spacing-preset .spacing-preset-title{width:180px;font-size:17px;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-title{width:auto;}}.spacing-preset .spacing-preset-value{font-size:14px;width:180px;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-value{width:auto;}}.spacing-preset .spacing-preset-var{width:400px;font-size:14px;opacity:0.5;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-var{width:auto;}}.spacing-preset .preset-spacing-line{width:100%;background-color:#e0e6eb;}","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":".spacing-preset{display:flex;align-items:center;gap:20px;margin-bottom:15px;}@media (max-width: 575.98px){.spacing-preset{flex-direction:column;row-gap:5px;}}","attributes":{"styleAttributes":{"display":["flex"],"alignItems":["center"],"gap":["20px"],"marginBottom":["15px"],"flexDirection":[null,null,null,"column"],"rowGap":[null,null,null,"5px"]}},"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" .spacing-preset-title","attributes":{"styleAttributes":{"width":["180px",null,null,"auto"],"fontSize":["17px"]}},"css":".spacing-preset .spacing-preset-title{width:180px;font-size:17px;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-title{width:auto;}}"},{"value":" .spacing-preset-value","attributes":{"styleAttributes":{"fontSize":["14px"],"width":["180px",null,null,"auto"]}},"css":".spacing-preset .spacing-preset-value{font-size:14px;width:180px;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-value{width:auto;}}"},{"value":" .spacing-preset-var","attributes":{"styleAttributes":{"width":["400px",null,null,"auto"],"fontSize":["14px"],"opacity":[0.5]}},"css":".spacing-preset .spacing-preset-var{width:400px;font-size:14px;opacity:0.5;}@media (max-width: 575.98px){.spacing-preset .spacing-preset-var{width:auto;}}"},{"value":" .preset-spacing-line","attributes":{"styleAttributes":{"width":["100%"],"backgroundColor":["#e0e6eb"]}},"css":".spacing-preset .preset-spacing-line{width:100%;background-color:#e0e6eb;}"}]}],"type":"inner","className":"spacing-preset","localId":"gsbp-sp01"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-sp01l","textContent":"X Small","className":"spacing-preset-title","localId":"gsbp-sp01l"} -->
<div class="spacing-preset-title">X Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-sp01d","textContent":"0.44rem","className":"spacing-preset-value","localId":"gsbp-sp01d"} -->
<div class="spacing-preset-value">0.44rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-fc0b5fd","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20","className":"spacing-preset-var","localId":"gsbp-fc0b5fd"} -->
<div class="spacing-preset-var">--wp--preset--spacing--20</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-sp01v","inlineCssStyles":".gsbp-sp01v{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-sp01v","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d20, 0.44rem)"]}} -->
<div class="preset-spacing-line gsbp-sp01v"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-638f17c","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-638f17c"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-20cb630","textContent":"Small","className":"spacing-preset-title","localId":"gsbp-20cb630"} -->
<div class="spacing-preset-title">Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-97150ed","textContent":"0.67rem","className":"spacing-preset-value","localId":"gsbp-97150ed"} -->
<div class="spacing-preset-value">0.67rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3f35eef","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30","className":"spacing-preset-var","localId":"gsbp-3f35eef"} -->
<div class="spacing-preset-var">--wp--preset--spacing--30</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8f39c9e","inlineCssStyles":".gsbp-8f39c9e{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-8f39c9e","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d30, 0.67rem)"]}} -->
<div class="preset-spacing-line gsbp-8f39c9e"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3d","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-a1b2c3d"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3e","textContent":"Regular","className":"spacing-preset-title","localId":"gsbp-a1b2c3e"} -->
<div class="spacing-preset-title">Regular</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3f","textContent":"1rem","className":"spacing-preset-value","localId":"gsbp-a1b2c3f"} -->
<div class="spacing-preset-value">1rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3g","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40","className":"spacing-preset-var","localId":"gsbp-a1b2c3g"} -->
<div class="spacing-preset-var">--wp--preset--spacing--40</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a1b2c3h","inlineCssStyles":".gsbp-a1b2c3h{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-a1b2c3h","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d40, 1rem)"]}} -->
<div class="preset-spacing-line gsbp-a1b2c3h"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4e","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-b2c3d4e"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4f","textContent":"Medium","className":"spacing-preset-title","localId":"gsbp-b2c3d4f"} -->
<div class="spacing-preset-title">Medium</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4g","textContent":"1.5rem","className":"spacing-preset-value","localId":"gsbp-b2c3d4g"} -->
<div class="spacing-preset-value">1.5rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4h","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50","className":"spacing-preset-var","localId":"gsbp-b2c3d4h"} -->
<div class="spacing-preset-var">--wp--preset--spacing--50</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b2c3d4i","inlineCssStyles":".gsbp-b2c3d4i{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-b2c3d4i","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d50, 1.5rem)"]}} -->
<div class="preset-spacing-line gsbp-b2c3d4i"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5f","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-c3d4e5f"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5g","textContent":"Large","className":"spacing-preset-title","localId":"gsbp-c3d4e5g"} -->
<div class="spacing-preset-title">Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5h","textContent":"2.25rem","className":"spacing-preset-value","localId":"gsbp-c3d4e5h"} -->
<div class="spacing-preset-value">2.25rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5i","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60","className":"spacing-preset-var","localId":"gsbp-c3d4e5i"} -->
<div class="spacing-preset-var">--wp--preset--spacing--60</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c3d4e5j","inlineCssStyles":".gsbp-c3d4e5j{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-c3d4e5j","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d60, 2.25rem)"]}} -->
<div class="preset-spacing-line gsbp-c3d4e5j"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6g","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-d4e5f6g"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6h","textContent":"X Large","className":"spacing-preset-title","localId":"gsbp-d4e5f6h"} -->
<div class="spacing-preset-title">X Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6i","textContent":"3.38rem","className":"spacing-preset-value","localId":"gsbp-d4e5f6i"} -->
<div class="spacing-preset-value">3.38rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6j","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d70","className":"spacing-preset-var","localId":"gsbp-d4e5f6j"} -->
<div class="spacing-preset-var">--wp--preset--spacing--70</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d4e5f6k","inlineCssStyles":".gsbp-d4e5f6k{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d70, 3.38rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-d4e5f6k","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d70, 3.38rem)"]}} -->
<div class="preset-spacing-line gsbp-d4e5f6k"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7h","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-e5f6g7h"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7i","textContent":"XX Large","className":"spacing-preset-title","localId":"gsbp-e5f6g7i"} -->
<div class="spacing-preset-title">XX Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7j","textContent":"5.06rem","className":"spacing-preset-value","localId":"gsbp-e5f6g7j"} -->
<div class="spacing-preset-value">5.06rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7k","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80","className":"spacing-preset-var","localId":"gsbp-e5f6g7k"} -->
<div class="spacing-preset-var">--wp--preset--spacing--80</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5f6g7l","inlineCssStyles":".gsbp-e5f6g7l{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80, 5.06rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-e5f6g7l","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d80, 5.06rem)"]}} -->
<div class="preset-spacing-line gsbp-e5f6g7l"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8i","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-f6g7h8i"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8j","textContent":"High","className":"spacing-preset-title","localId":"gsbp-f6g7h8j"} -->
<div class="spacing-preset-title">High</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8k","textContent":"7.59rem","className":"spacing-preset-value","localId":"gsbp-f6g7h8k"} -->
<div class="spacing-preset-value">7.59rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8l","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d90","className":"spacing-preset-var","localId":"gsbp-f6g7h8l"} -->
<div class="spacing-preset-var">--wp--preset--spacing--90</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f6g7h8m","inlineCssStyles":".gsbp-f6g7h8m{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d90, 7.59rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-f6g7h8m","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d90, 7.59rem)"]}} -->
<div class="preset-spacing-line gsbp-f6g7h8m"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9j","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-g7h8i9j"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9k","textContent":"Grand","className":"spacing-preset-title","localId":"gsbp-g7h8i9k"} -->
<div class="spacing-preset-title">Grand</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9l","textContent":"11.39rem","className":"spacing-preset-value","localId":"gsbp-g7h8i9l"} -->
<div class="spacing-preset-value">11.39rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9m","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d100","className":"spacing-preset-var","localId":"gsbp-g7h8i9m"} -->
<div class="spacing-preset-var">--wp--preset--spacing--100</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-g7h8i9n","inlineCssStyles":".gsbp-g7h8i9n{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d100, 11.39rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-g7h8i9n","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d100, 11.39rem)"]}} -->
<div class="preset-spacing-line gsbp-g7h8i9n"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0k","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-h8i9j0k"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0l","textContent":"Huge","className":"spacing-preset-title","localId":"gsbp-h8i9j0l"} -->
<div class="spacing-preset-title">Huge</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0m","textContent":"17.09rem","className":"spacing-preset-value","localId":"gsbp-h8i9j0m"} -->
<div class="spacing-preset-value">17.09rem</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0n","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d110","className":"spacing-preset-var","localId":"gsbp-h8i9j0n"} -->
<div class="spacing-preset-var">--wp--preset--spacing--110</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-h8i9j0o","inlineCssStyles":".gsbp-h8i9j0o{height:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d110, 17.09rem);}","type":"no","className":"preset-spacing-line","localId":"gsbp-h8i9j0o","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d110, 17.09rem)"]}} -->
<div class="preset-spacing-line gsbp-h8i9j0o"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-db42957","dynamicGClasses":[{"value":"spacing-preset","type":"local","label":"spacing-preset","localed":false,"css":"","attributes":[],"originalID":"gsbp-sp01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"spacing-preset","localId":"gsbp-db42957"} -->
<div class="spacing-preset"><!-- wp:greenshift-blocks/element {"id":"gsbp-209705f","textContent":"Side space","className":"spacing-preset-title","localId":"gsbp-209705f"} -->
<div class="spacing-preset-title">Side space</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-28f1c22","textContent":"min(3vw, 20px)","className":"spacing-preset-value","localId":"gsbp-28f1c22"} -->
<div class="spacing-preset-value">min(3vw, 20px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0f89299","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dside","className":"spacing-preset-var","localId":"gsbp-0f89299"} -->
<div class="spacing-preset-var">--wp--custom--spacing--side</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ad6422f","inlineCssStyles":".gsbp-ad6422f{height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dside, min(3vw, 20px));}","type":"no","className":"preset-spacing-line","localId":"gsbp-ad6422f","styleAttributes":{"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dspacing\u002d\u002dside, min(3vw, 20px))"]}} -->
<div class="preset-spacing-line gsbp-ad6422f"></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1955d37","anchor":"size","type":"inner","localId":"gsbp-1955d37","align":"wide","metadata":{"name":"Size"}} -->
<div class="alignwide" id="size"><!-- wp:greenshift-blocks/element {"id":"gsbp-46f8748","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-46f8748","align":"wide","metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-7d5716f","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Size","className":"brand-panel-title","localId":"gsbp-7d5716f","isVariation":"divtext"} -->
<div class="brand-panel-title">Size</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0b720dc","inlineCssStyles":".gsbp-0b720dc{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-0b720dc","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-0b720dc"><!-- wp:greenshift-blocks/element {"id":"gsbp-4dca2fb","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Size styles","className":"brand-panel-subtitle","localId":"gsbp-4dca2fb"} -->
<div class="brand-panel-subtitle">Size styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2c5d6c5","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Sized rectangles","className":"brand-panel-subsub","localId":"gsbp-2c5d6c5"} -->
<div class="brand-panel-subsub">Sized rectangles</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1649da3","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-1649da3","align":"wide","metadata":{"name":"Content"}} -->
<div class="brand-panel-content alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-whgrid","inlineCssStyles":".gsbp-whgrid{gap:20px;display:grid;column-gap:10px;row-gap:10px;}.gsbp-whgrid\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(3){grid-area:1 / 3 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(4){grid-area:1 / 4 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(5){grid-area:1 / 5 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(6){grid-area:3 / 1 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(7){grid-area:3 / 2 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(8){grid-area:3 / 3 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(9){grid-area:3 / 4 / span 1 / span 1;}.gsbp-whgrid\u003e*:not(style):nth-of-type(10){grid-area:3 / 5 / span 1 / span 1;}.gsbp-whgrid{grid-template-columns:repeat(5, 1fr);}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(3){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(4){grid-area:2 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(5){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(6){grid-area:3 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(7){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(8){grid-area:4 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(9){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(10){grid-area:5 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-whgrid{grid-template-columns:repeat(2, 1fr);}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(2){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(3){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(4){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(5){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(6){grid-area:6 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(7){grid-area:7 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(8){grid-area:8 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(9){grid-area:9 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid\u003e*:not(style):nth-of-type(10){grid-area:10 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-whgrid{grid-template-columns:repeat(1, 1fr);}}.gsbp-whgrid{\nalign-items:end;\n}","type":"inner","localId":"gsbp-whgrid","styleAttributes":{"gap":["20px"],"display":["grid"],"gridLayoutItems_Extra":10,"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":3,"y":0,"i":"3","moved":false,"static":false},{"w":1,"h":1,"x":4,"y":0,"i":"4","moved":false,"static":false},{"w":1,"h":1,"x":0,"y":2,"i":"5","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":2,"i":"6","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":2,"i":"7","moved":false,"static":false},{"w":1,"h":1,"x":3,"y":2,"i":"8","moved":false,"static":false},{"w":1,"h":1,"x":4,"y":2,"i":"9","moved":false,"static":false}],"cols":5,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1},{"i":"4","x":0,"y":2,"w":1,"h":1},{"i":"5","x":1,"y":2,"w":1,"h":1},{"i":"6","x":0,"y":3,"w":1,"h":1},{"i":"7","x":1,"y":3,"w":1,"h":1},{"i":"8","x":0,"y":4,"w":1,"h":1},{"i":"9","x":1,"y":4,"w":1,"h":1}],"cols":2,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1},{"i":"4","x":0,"y":4,"w":1,"h":1},{"i":"5","x":0,"y":5,"w":1,"h":1},{"i":"6","x":0,"y":6,"w":1,"h":1},{"i":"7","x":0,"y":7,"w":1,"h":1},{"i":"8","x":0,"y":8,"w":1,"h":1},{"i":"9","x":0,"y":9,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"columnGap":["10px"],"rowGap":["10px"],"gridTemplateLink_Extra":false,"customCSS_Extra":"{CURRENT}{\nalign-items:end;\n}"}} -->
<div class="gsbp-whgrid"><!-- wp:greenshift-blocks/element {"id":"gsbp-wh01","inlineCssStyles":".size-square{text-align:center;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;line-height:1.5em;}.size-square .size-dot{background-color:#d9e0e6;margin-bottom:20px;margin-left:auto;margin-right:auto;}.size-square .size-title{font-size:17px;font-weight:500;margin-top:10px;}.size-square .size-value{font-size:14px;line-height:20px;}.size-square .size-var{font-size:14px;opacity:0.5;}.size-square .size-border{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);border-width:1px;border-style:solid;border-color:#00000029;}.size-square .size-shadow{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}.size-square .size-transition{background-color:#e8edf1;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}.size-square .size-transition:hover{background-color:#b0bbc9;transform:scale(1.05) rotate(10deg);}","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":".size-square{text-align:center;display:flex;flex-direction:column;align-items:center;justify-content:flex-start;line-height:1.5em;}","attributes":{"styleAttributes":{"textAlign":["center"],"display":["flex"],"flexDirection":["column"],"alignItems":["center"],"justifyContent":["flex-start"],"lineHeight":["1.5em"]}},"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[{"value":" .size-dot","attributes":{"styleAttributes":{"backgroundColor":["#d9e0e6"],"marginBottom":["20px"],"marginLeft":["auto"],"marginRight":["auto"]}},"css":".size-square .size-dot{background-color:#d9e0e6;margin-bottom:20px;margin-left:auto;margin-right:auto;}"},{"value":" .size-title","attributes":{"styleAttributes":{"fontSize":["17px"],"fontWeight":["500"],"marginTop":["10px"]}},"css":".size-square .size-title{font-size:17px;font-weight:500;margin-top:10px;}"},{"value":" .size-value","attributes":{"styleAttributes":{"fontSize":["14px"],"lineHeight":["20px"]}},"css":".size-square .size-value{font-size:14px;line-height:20px;}"},{"value":" .size-var","attributes":{"styleAttributes":{"fontSize":["14px"],"opacity":[0.5]}},"css":".size-square .size-var{font-size:14px;opacity:0.5;}"},{"value":" .size-border","attributes":{"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["#00000029"],"borderCustom_Extra":false,"borderLink_Extra":false}},"css":".size-square .size-border{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);border-width:1px;border-style:solid;border-color:#00000029;}"},{"value":" .size-shadow","attributes":{"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"]}},"css":".size-square .size-shadow{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}"},{"value":" .size-transition","attributes":{"styleAttributes":{"backgroundColor":["#e8edf1"],"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"],"backgroundColor_hover":["#b0bbc9"],"transformLink_Extra":{"scale":true,"rotate":true},"scale_Extra_hover":["1.05"],"transform_hover":["scale(1.05) rotate(10deg)"],"rotate_Extra_hover":["10"]}},"css":".size-square .size-transition{background-color:#e8edf1;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl, 150px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}.size-square .size-transition:hover{background-color:#b0bbc9;transform:scale(1.05) rotate(10deg);}"}]}],"type":"inner","className":"size-square","localId":"gsbp-wh01"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-5518b97","inlineCssStyles":".gsbp-5518b97{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot, 6px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot, 6px);}","type":"no","className":"size-dot","localId":"gsbp-5518b97","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot, 6px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot, 6px)"]}} -->
<div class="size-dot gsbp-5518b97"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8e18746","textContent":"Dot","className":"size-title","localId":"gsbp-8e18746"} -->
<div class="size-title">Dot</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a5e60a8","textContent":"6px","className":"size-value","localId":"gsbp-a5e60a8"} -->
<div class="size-value">6px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-014ba4f","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ddot","className":"size-var","localId":"gsbp-014ba4f"} -->
<div class="size-var">--wp--custom--size--dot</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1ab6acf","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-1ab6acf"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-41797de","inlineCssStyles":".gsbp-41797de{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini, 11px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini, 11px);}","type":"no","className":"size-dot","localId":"gsbp-41797de","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini, 11px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini, 11px)"]}} -->
<div class="size-dot gsbp-41797de"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-91f4675","textContent":"Mini","className":"size-title","localId":"gsbp-91f4675"} -->
<div class="size-title">Mini</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-bfab74d","textContent":"11px","className":"size-value","localId":"gsbp-bfab74d"} -->
<div class="size-value">11px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a7a8529","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dmini","className":"size-var","localId":"gsbp-a7a8529"} -->
<div class="size-var">--wp--custom--size--mini</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-398778b","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-398778b"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-9a74932","inlineCssStyles":".gsbp-9a74932{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs, 17px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs, 17px);}","type":"no","className":"size-dot","localId":"gsbp-9a74932","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs, 17px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs, 17px)"]}} -->
<div class="size-dot gsbp-9a74932"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-735f967","textContent":"X Small","className":"size-title","localId":"gsbp-735f967"} -->
<div class="size-title">X Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-895847f","textContent":"17px","className":"size-value","localId":"gsbp-895847f"} -->
<div class="size-value">17px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a7a01ac","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxs","className":"size-var","localId":"gsbp-a7a01ac"} -->
<div class="size-var">--wp--custom--size--xs</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-46d9cea","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-46d9cea"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-249a729","inlineCssStyles":".gsbp-9c940dd{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ds, 26px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ds, 26px);}","type":"no","className":"size-dot","localId":"gsbp-9c940dd","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ds, 26px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002ds, 26px)"]}} -->
<div class="size-dot gsbp-9c940dd"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-10582b8","textContent":"Small","className":"size-title","localId":"gsbp-10582b8"} -->
<div class="size-title">Small</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c6c59af","textContent":"26px","className":"size-value","localId":"gsbp-c6c59af"} -->
<div class="size-value">26px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c1b83a1","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dsmall","className":"size-var","localId":"gsbp-c1b83a1"} -->
<div class="size-var">--wp--custom--size--small</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1439040","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-1439040"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-d6c7e63","inlineCssStyles":".gsbp-d6c7e63{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px);}","type":"no","className":"size-dot","localId":"gsbp-d6c7e63","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr, 40px)"]}} -->
<div class="size-dot gsbp-d6c7e63"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-dce3b3a","textContent":"Regular","className":"size-title","localId":"gsbp-dce3b3a"} -->
<div class="size-title">Regular</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-622b602","textContent":"40px","className":"size-value","localId":"gsbp-622b602"} -->
<div class="size-value">40px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ee04017","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dr","className":"size-var","localId":"gsbp-ee04017"} -->
<div class="size-var">--wp--custom--size--r</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f188dcc","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-f188dcc"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-3ef7469","inlineCssStyles":".gsbp-wh01v2n{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm, 56px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm, 56px);}","type":"no","className":"size-dot","localId":"gsbp-wh01v2n","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm, 56px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm, 56px)"]}} -->
<div class="size-dot gsbp-wh01v2n"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9743461","textContent":"Medium","className":"size-title","localId":"gsbp-9743461"} -->
<div class="size-title">Medium</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b931ead","textContent":"56px","className":"size-value","localId":"gsbp-b931ead"} -->
<div class="size-value">56px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-952e3e0","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dm","className":"size-var","localId":"gsbp-952e3e0"} -->
<div class="size-var">--wp--custom--size--m</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f3618d0","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-f3618d0"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-d5c84ca","inlineCssStyles":".gsbp-f5160b03{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px);}","type":"no","className":"size-dot","localId":"gsbp-f5160b03","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"]}} -->
<div class="size-dot gsbp-f5160b03"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-49f3c91","textContent":"Large","className":"size-title","localId":"gsbp-49f3c91"} -->
<div class="size-title">Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ee90b9c","textContent":"74px","className":"size-value","localId":"gsbp-ee90b9c"} -->
<div class="size-value">74px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b43fb27","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl","className":"size-var","localId":"gsbp-b43fb27"} -->
<div class="size-var">--wp--custom--size--l</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-be3435f","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-be3435f"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-7fab546","inlineCssStyles":".gsbp-e5c5e302{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px);}","type":"no","className":"size-dot","localId":"gsbp-e5c5e302","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl, 100px)"]}} -->
<div class="size-dot gsbp-e5c5e302"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2c96ef3","textContent":"X Large","className":"size-title","localId":"gsbp-2c96ef3"} -->
<div class="size-title">X Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-530f831","textContent":"100px","className":"size-value","localId":"gsbp-530f831"} -->
<div class="size-value">100px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d763774","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxl","className":"size-var","localId":"gsbp-d763774"} -->
<div class="size-var">--wp--custom--size--xl</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7862dc0","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-7862dc0"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-24cec63","inlineCssStyles":".gsbp-24cec63{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh, 220px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh, 220px);}","type":"no","className":"size-dot","localId":"gsbp-24cec63","styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh, 220px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh, 220px)"]}} -->
<div class="size-dot gsbp-24cec63"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b7365ab","textContent":"XX Large","className":"size-title","localId":"gsbp-b7365ab"} -->
<div class="size-title">XX Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c80fcf5","textContent":"150px","className":"size-value","localId":"gsbp-c80fcf5"} -->
<div class="size-value">150px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5870e16","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dxxl","className":"size-var","localId":"gsbp-5870e16"} -->
<div class="size-var">--wp--custom--size--xxl</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-89336aa","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-89336aa"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-83707b9","inlineCssStyles":".gsbp-7490673w{width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px);height:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px);}","type":"no","className":"size-dot","localId":"gsbp-7490673w","staticLocalId":true,"styleAttributes":{"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px)"],"height":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px)"]}} -->
<div class="size-dot gsbp-7490673w"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e4dbb5c","textContent":"High","className":"size-title","localId":"gsbp-e4dbb5c"} -->
<div class="size-title">High</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5eb3a38","textContent":"220px","className":"size-value","localId":"gsbp-5eb3a38"} -->
<div class="size-value">220px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b68aa54","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhigh","className":"size-var","localId":"gsbp-b68aa54"} -->
<div class="size-var">--wp--custom--size--high</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-11f27cc","inlineCssStyles":".gsbp-11f27cc{font-size:20px;font-weight:600;margin-top:40px;margin-bottom:40px;}","textContent":"Extra Sizes","localId":"gsbp-11f27cc","styleAttributes":{"fontSize":["20px"],"fontWeight":["600"],"marginTop":["40px"],"marginBottom":["40px"]},"isVariation":"divtext"} -->
<div class="gsbp-11f27cc">Extra Sizes</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ff9a446","inlineCssStyles":".gsbp-ff9a446{font-size:15px;}","textContent":"Grand:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgrand, 300px)","localId":"gsbp-ff9a446","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-ff9a446">Grand:  var(--wp--custom--size--grand, 300px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8f7b17b","inlineCssStyles":".gsbp-8f7b17b{font-size:15px;}","textContent":"Huge:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dhuge, 385px)","localId":"gsbp-8f7b17b","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-8f7b17b">Huge:  var(--wp--custom--size--huge, 385px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e07944d","inlineCssStyles":".gsbp-e07944d{font-size:15px;}","textContent":"Giant:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgiant, 500px)","localId":"gsbp-e07944d","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-e07944d">Giant:  var(--wp--custom--size--giant, 500px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-20be42f","inlineCssStyles":".gsbp-20be42f{font-size:15px;}","textContent":"Colossal:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dcolossal, 700px)","localId":"gsbp-20be42f","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-20be42f">Colossal:  var(--wp--custom--size--colossal, 700px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c4a3063","inlineCssStyles":".gsbp-c4a3063{font-size:15px;}","textContent":"God:  var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dgod, 1000px)","localId":"gsbp-c4a3063","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-c4a3063">God:  var(--wp--custom--size--god, 1000px)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ad1dca5","inlineCssStyles":".gsbp-ad1dca5{font-size:15px;}","textContent":"Section size:  var(\u002d\u002dwp\u002d\u002dstyle\u002d\u002dglobal\u002d\u002dwide-size, 1200px)","localId":"gsbp-ad1dca5","styleAttributes":{"fontSize":["15px"]},"isVariation":"divtext"} -->
<div class="gsbp-ad1dca5">Section size:  var(--wp--style--global--wide-size, 1200px)</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1fcae3e","anchor":"borders","type":"inner","localId":"gsbp-1fcae3e","align":"wide","metadata":{"name":"Borders"}} -->
<div class="alignwide" id="borders"><!-- wp:greenshift-blocks/element {"id":"gsbp-f33bfac","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-f33bfac","align":"wide","metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-5b89774","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Border Radius","className":"brand-panel-title","localId":"gsbp-5b89774","isVariation":"divtext"} -->
<div class="brand-panel-title">Border Radius</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0273df3","inlineCssStyles":".gsbp-0273df3{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-0273df3","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-0273df3"><!-- wp:greenshift-blocks/element {"id":"gsbp-ca63d40","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Border styles","className":"brand-panel-subtitle","localId":"gsbp-ca63d40"} -->
<div class="brand-panel-subtitle">Border styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e5a0ce7","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Border Radius Presets","className":"brand-panel-subsub","localId":"gsbp-e5a0ce7"} -->
<div class="brand-panel-subsub">Border Radius Presets</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3619540","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-3619540","align":"wide","metadata":{"name":"Content"}} -->
<div class="brand-panel-content alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-db66562","inlineCssStyles":".gsbp-db66562{gap:20px;display:grid;column-gap:10px;row-gap:30px;}.gsbp-db66562\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(3){grid-area:1 / 3 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(4){grid-area:2 / 1 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(5){grid-area:2 / 2 / span 1 / span 1;}.gsbp-db66562\u003e*:not(style):nth-of-type(6){grid-area:2 / 3 / span 1 / span 1;}.gsbp-db66562{grid-template-columns:repeat(3, 1fr);}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(3){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(4){grid-area:2 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(5){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(6){grid-area:3 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-db66562{grid-template-columns:repeat(2, 1fr);}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(2){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(3){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(4){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(5){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562\u003e*:not(style):nth-of-type(6){grid-area:6 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-db66562{grid-template-columns:repeat(1, 1fr);}}.gsbp-db66562{\nalign-items:end;\n}","type":"inner","localId":"gsbp-db66562","styleAttributes":{"gap":["20px"],"display":["grid"],"gridLayoutItems_Extra":6,"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":0,"y":1,"i":"3","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":1,"i":"4","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":1,"i":"5","moved":false,"static":false}],"cols":3,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1},{"i":"4","x":0,"y":2,"w":1,"h":1},{"i":"5","x":1,"y":2,"w":1,"h":1}],"cols":2,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1},{"i":"4","x":0,"y":4,"w":1,"h":1},{"i":"5","x":0,"y":5,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"columnGap":["10px"],"rowGap":["30px"],"gridTemplateLink_Extra":false,"customCSS_Extra":"{CURRENT}{\nalign-items:end;\n}"}} -->
<div class="gsbp-db66562"><!-- wp:greenshift-blocks/element {"id":"gsbp-15c5017","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-15c5017"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-5c18e17","inlineCssStyles":".gsbp-5c18e17{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px);}","type":"no","className":"size-border","localId":"gsbp-5c18e17","styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini, 5px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-5c18e17"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3acf7d9","textContent":"Mini","className":"size-title","localId":"gsbp-3acf7d9"} -->
<div class="size-title">Mini</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3c9cdf9","textContent":"5px","className":"size-value","localId":"gsbp-3c9cdf9"} -->
<div class="size-value">5px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8b0c070","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmini","className":"size-var","localId":"gsbp-8b0c070"} -->
<div class="size-var">--wp--custom--border-radius--mini</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a892989","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-a892989"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-7ca9de7","inlineCssStyles":".gsbp-7ca9de7{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);}","type":"no","className":"size-border","localId":"gsbp-7ca9de7","styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-7ca9de7"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-f5db9fb","textContent":"Mini","className":"size-title","localId":"gsbp-f5db9fb"} -->
<div class="size-title">Mini</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a03730c","textContent":"10px","className":"size-value","localId":"gsbp-a03730c"} -->
<div class="size-value">10px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-fc18cad","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall","className":"size-var","localId":"gsbp-fc18cad"} -->
<div class="size-var">--wp--custom--border-radius--small</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-460ca0d","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-460ca0d"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-2b54944","inlineCssStyles":".gsbp-2b54944{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);}","type":"no","className":"size-border","localId":"gsbp-2b54944","styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-2b54944"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ca3a718","textContent":"Medium","className":"size-title","localId":"gsbp-ca3a718"} -->
<div class="size-title">Medium</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7af52b1","textContent":"15px","className":"size-value","localId":"gsbp-7af52b1"} -->
<div class="size-value">15px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0bcfda4","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium","className":"size-var","localId":"gsbp-0bcfda4"} -->
<div class="size-var">--wp--custom--border-radius--medium</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-abd0db7","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-abd0db7"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-806c8ee","inlineCssStyles":".gsbp-9c940d{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px);}","type":"no","className":"size-border","localId":"gsbp-9c940d","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge, 20px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-9c940d"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9382af4","textContent":"Large","className":"size-title","localId":"gsbp-9382af4"} -->
<div class="size-title">Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3aff45a","textContent":"20px","className":"size-value","localId":"gsbp-3aff45a"} -->
<div class="size-value">20px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-cb6df78","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dlarge","className":"size-var","localId":"gsbp-cb6df78"} -->
<div class="size-var">--wp--custom--border-radius--large</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0e0b289","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-0e0b289"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-05838a4","inlineCssStyles":".gsbp-05838a4{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px);}","type":"no","className":"size-border","localId":"gsbp-05838a4","styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge, 35px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true}} -->
<div class="size-border gsbp-05838a4"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-573a393","textContent":"X Large","className":"size-title","localId":"gsbp-573a393"} -->
<div class="size-title">X Large</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0217cf2","textContent":"35px","className":"size-value","localId":"gsbp-0217cf2"} -->
<div class="size-value">35px</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-fcf8863","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dxlarge","className":"size-var","localId":"gsbp-fcf8863"} -->
<div class="size-var">--wp--custom--border-radius--xlarge</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-04bd50e","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-04bd50e"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-8e97dde","inlineCssStyles":".gsbp-wh01v2{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%) !important;border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%) !important;border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%) !important;border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%) !important;width:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px) !important;}","type":"no","className":"size-border","localId":"gsbp-wh01v2","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle, 50%)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"width":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dsize\u002d\u002dl, 74px)"]},"enableSpecificity":true} -->
<div class="size-border gsbp-wh01v2"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9f46849","textContent":"Circle","className":"size-title","localId":"gsbp-9f46849"} -->
<div class="size-title">Circle</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2915f0d","textContent":"50%","className":"size-value","localId":"gsbp-2915f0d"} -->
<div class="size-value">50%</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b409749","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dcircle","className":"size-var","localId":"gsbp-b409749"} -->
<div class="size-var">--wp--custom--border-radius--circle</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2ca80f2","anchor":"shadows","type":"inner","localId":"gsbp-2ca80f2","align":"wide","metadata":{"name":"Shadows"}} -->
<div class="alignwide" id="shadows"><!-- wp:greenshift-blocks/element {"id":"gsbp-5d9911d","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-5d9911d","align":"wide","metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-8b0ec8e","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Shadows","className":"brand-panel-title","localId":"gsbp-8b0ec8e","isVariation":"divtext"} -->
<div class="brand-panel-title">Shadows</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e4148f9","inlineCssStyles":".gsbp-e4148f9{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-e4148f9","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-e4148f9"><!-- wp:greenshift-blocks/element {"id":"gsbp-dd42e9e","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Shadow styles","className":"brand-panel-subtitle","localId":"gsbp-dd42e9e"} -->
<div class="brand-panel-subtitle">Shadow styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-75eb4aa","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Shadow Presets","className":"brand-panel-subsub","localId":"gsbp-75eb4aa"} -->
<div class="brand-panel-subsub">Shadow Presets</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-028156d","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-028156d","align":"wide","metadata":{"name":"Content"}} -->
<div class="brand-panel-content alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-ed1bde1","inlineCssStyles":".gsbp-ed1bde1{gap:20px;display:grid;column-gap:10px;row-gap:30px;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(3){grid-area:1 / 3 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(4){grid-area:2 / 1 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(5){grid-area:2 / 2 / span 1 / span 1;}.gsbp-ed1bde1\u003e*:not(style):nth-of-type(6){grid-area:2 / 3 / span 1 / span 1;}.gsbp-ed1bde1{grid-template-columns:repeat(3, 1fr);}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(3){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(4){grid-area:2 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(5){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(6){grid-area:3 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-ed1bde1{grid-template-columns:repeat(2, 1fr);}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(2){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(3){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(4){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(5){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1\u003e*:not(style):nth-of-type(6){grid-area:6 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-ed1bde1{grid-template-columns:repeat(1, 1fr);}}.gsbp-ed1bde1{\nalign-items:end;\n}","type":"inner","localId":"gsbp-ed1bde1","styleAttributes":{"gap":["20px"],"display":["grid"],"gridLayoutItems_Extra":6,"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":0,"y":1,"i":"3","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":1,"i":"4","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":1,"i":"5","moved":false,"static":false}],"cols":3,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1},{"i":"4","x":0,"y":2,"w":1,"h":1},{"i":"5","x":1,"y":2,"w":1,"h":1}],"cols":2,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1},{"i":"4","x":0,"y":4,"w":1,"h":1},{"i":"5","x":0,"y":5,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"columnGap":["10px"],"rowGap":["30px"],"gridTemplateLink_Extra":false,"customCSS_Extra":"{CURRENT}{\nalign-items:end;\n}"}} -->
<div class="gsbp-ed1bde1"><!-- wp:greenshift-blocks/element {"id":"gsbp-d013942","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-d013942"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-513ba10","inlineCssStyles":".gsbp-513ba103{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002daccent, 0px 15px 25px 0px rgba(0, 0, 0, 0.1));}","type":"no","className":"size-shadow","localId":"gsbp-513ba103","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002daccent, 0px 15px 25px 0px rgba(0, 0, 0, 0.1))"]}} -->
<div class="size-shadow gsbp-513ba103"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5949cdf","textContent":"Accent","className":"size-title","localId":"gsbp-5949cdf"} -->
<div class="size-title">Accent</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1291f6a","textContent":"0px 15px 25px 0px rgba(0, 0, 0, 0.1)","className":"size-value","localId":"gsbp-1291f6a"} -->
<div class="size-value">0px 15px 25px 0px rgba(0, 0, 0, 0.1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c87ff92","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002daccent","className":"size-var","localId":"gsbp-c87ff92"} -->
<div class="size-var">--wp--preset--shadow--accent</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4e965cf","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-4e965cf"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-5917dea","inlineCssStyles":".gsbp-5917dea3{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dmild, 0px 5px 20px 0px rgba(0, 0, 0, 0.03));}","type":"no","className":"size-shadow","localId":"gsbp-5917dea3","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dmild, 0px 5px 20px 0px rgba(0, 0, 0, 0.03))"]}} -->
<div class="size-shadow gsbp-5917dea3"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-22c75a9","textContent":"Mild","className":"size-title","localId":"gsbp-22c75a9"} -->
<div class="size-title">Mild</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1a8a919","textContent":"0px 5px 20px 0px rgba(0, 0, 0, 0.03)","className":"size-value","localId":"gsbp-1a8a919"} -->
<div class="size-value">0px 5px 20px 0px rgba(0, 0, 0, 0.03)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0d823b0","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dmild","className":"size-var","localId":"gsbp-0d823b0"} -->
<div class="size-var">--wp--preset--shadow--mild</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-10cf5ed","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-10cf5ed"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-8e0c8dd","inlineCssStyles":".gsbp-8e0c8dd3{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dsoft, 0px 15px 30px 0px rgba(119, 123, 146, 0.1));}","type":"no","className":"size-shadow","localId":"gsbp-8e0c8dd3","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dsoft, 0px 15px 30px 0px rgba(119, 123, 146, 0.1))"]}} -->
<div class="size-shadow gsbp-8e0c8dd3"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-adb4c4d","textContent":"Soft","className":"size-title","localId":"gsbp-adb4c4d"} -->
<div class="size-title">Soft</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a9de779","textContent":"0px 15px 30px 0px rgba(119, 123, 146, 0.1)","className":"size-value","localId":"gsbp-a9de779"} -->
<div class="size-value">0px 15px 30px 0px rgba(119, 123, 146, 0.1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a87369e","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dsoft","className":"size-var","localId":"gsbp-a87369e"} -->
<div class="size-var">--wp--preset--shadow--soft</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1fa3a15","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-1fa3a15"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-a842da3","inlineCssStyles":".gsbp-9c940d3{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002delegant, 0px 5px 23px 0px rgba(188, 207, 219, 0.35));}","type":"no","className":"size-shadow","localId":"gsbp-9c940d3","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002delegant, 0px 5px 23px 0px rgba(188, 207, 219, 0.35))"]}} -->
<div class="size-shadow gsbp-9c940d3"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-eabc866","textContent":"Elegant","className":"size-title","localId":"gsbp-eabc866"} -->
<div class="size-title">Elegant</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-60a9601","textContent":"0px 5px 23px 0px rgba(188, 207, 219, 0.35)","className":"size-value","localId":"gsbp-60a9601"} -->
<div class="size-value">0px 5px 23px 0px rgba(188, 207, 219, 0.35)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-99da881","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002delegant","className":"size-var","localId":"gsbp-99da881"} -->
<div class="size-var">--wp--preset--shadow--elegant</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d9b556b","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-d9b556b"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-30797f1","inlineCssStyles":".gsbp-30797f12{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07));}","type":"no","className":"size-shadow","localId":"gsbp-30797f12","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus, 0px 2px 4px 0px rgba(0, 0, 0, 0.07))"]}} -->
<div class="size-shadow gsbp-30797f12"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1de1eb2","textContent":"Focus","className":"size-title","localId":"gsbp-1de1eb2"} -->
<div class="size-title">Focus</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-77cf7f4","textContent":"0px 2px 4px 0px rgba(0, 0, 0, 0.07)","className":"size-value","localId":"gsbp-77cf7f4"} -->
<div class="size-value">0px 2px 4px 0px rgba(0, 0, 0, 0.07)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-08e11f9","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dfocus","className":"size-var","localId":"gsbp-08e11f9"} -->
<div class="size-var">--wp--preset--shadow--focus</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d1dc2e6","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-d1dc2e6"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-9a8519d","inlineCssStyles":".gsbp-wh01v23{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);box-shadow:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dhighlight, 0px 32px 48px 0px rgba(0, 0, 0, 0.15));}","type":"no","className":"size-shadow","localId":"gsbp-wh01v23","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"boxShadow":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dhighlight, 0px 32px 48px 0px rgba(0, 0, 0, 0.15))"]},"enableSpecificity":false} -->
<div class="size-shadow gsbp-wh01v23"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8c777e4","textContent":"Highlight","className":"size-title","localId":"gsbp-8c777e4"} -->
<div class="size-title">Highlight</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-28e8b91","textContent":"0px 32px 48px 0px rgba(0, 0, 0, 0.15)","className":"size-value","localId":"gsbp-28e8b91"} -->
<div class="size-value">0px 32px 48px 0px rgba(0, 0, 0, 0.15)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1fe56f4","textContent":"\u002d\u002dwp\u002d\u002dpreset\u002d\u002dshadow\u002d\u002dhighlight","className":"size-var","localId":"gsbp-1fe56f4"} -->
<div class="size-var">--wp--preset--shadow--highlight</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a13f312","anchor":"transitions","type":"inner","localId":"gsbp-a13f312","align":"wide","metadata":{"name":"Transitions"}} -->
<div class="alignwide" id="transitions"><!-- wp:greenshift-blocks/element {"id":"gsbp-e1d2391","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-e1d2391","align":"wide","metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-cfc32fe","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Transitions","className":"brand-panel-title","localId":"gsbp-cfc32fe","isVariation":"divtext"} -->
<div class="brand-panel-title">Transitions</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0cf8d30","inlineCssStyles":".gsbp-0cf8d30{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-0cf8d30","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-0cf8d30"><!-- wp:greenshift-blocks/element {"id":"gsbp-4dc2be5","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Transition styles","className":"brand-panel-subtitle","localId":"gsbp-4dc2be5"} -->
<div class="brand-panel-subtitle">Transition styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-c7c5f71","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Transition Presets","className":"brand-panel-subsub","localId":"gsbp-c7c5f71"} -->
<div class="brand-panel-subsub">Transition Presets</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-9b4cd62","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-9b4cd62","align":"wide","metadata":{"name":"Content"}} -->
<div class="brand-panel-content alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-3331f1e","inlineCssStyles":".gsbp-3331f1e{gap:20px;display:grid;column-gap:10px;row-gap:30px;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(3){grid-area:1 / 3 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(4){grid-area:2 / 1 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(5){grid-area:2 / 2 / span 1 / span 1;}.gsbp-3331f1e\u003e*:not(style):nth-of-type(6){grid-area:2 / 3 / span 1 / span 1;}.gsbp-3331f1e{grid-template-columns:repeat(3, 1fr);}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(2){grid-area:1 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(3){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(4){grid-area:2 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(5){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(6){grid-area:3 / 2 / span 1 / span 1;}}@media (max-width: 991.98px){.gsbp-3331f1e{grid-template-columns:repeat(2, 1fr);}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(1){grid-area:1 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(2){grid-area:2 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(3){grid-area:3 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(4){grid-area:4 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(5){grid-area:5 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e\u003e*:not(style):nth-of-type(6){grid-area:6 / 1 / span 1 / span 1;}}@media (max-width: 575.98px){.gsbp-3331f1e{grid-template-columns:repeat(1, 1fr);}}.gsbp-3331f1e{\nalign-items:end;\n}","type":"inner","localId":"gsbp-3331f1e","styleAttributes":{"gap":["20px"],"display":["grid"],"gridLayoutItems_Extra":6,"gridLayout_Extra":{"desktop":{"layouts":[{"w":1,"h":1,"x":0,"y":0,"i":"0","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":0,"i":"1","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":0,"i":"2","moved":false,"static":false},{"w":1,"h":1,"x":0,"y":1,"i":"3","moved":false,"static":false},{"w":1,"h":1,"x":1,"y":1,"i":"4","moved":false,"static":false},{"w":1,"h":1,"x":2,"y":1,"i":"5","moved":false,"static":false}],"cols":3,"allowOverlap":false,"compactType":"horizontal"},"tablet":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":1,"y":0,"w":1,"h":1},{"i":"2","x":0,"y":1,"w":1,"h":1},{"i":"3","x":1,"y":1,"w":1,"h":1},{"i":"4","x":0,"y":2,"w":1,"h":1},{"i":"5","x":1,"y":2,"w":1,"h":1}],"cols":2,"allowOverlap":false,"compactType":"horizontal"},"mobile":{"layouts":[{"i":"0","x":0,"y":0,"w":1,"h":1},{"i":"1","x":0,"y":1,"w":1,"h":1},{"i":"2","x":0,"y":2,"w":1,"h":1},{"i":"3","x":0,"y":3,"w":1,"h":1},{"i":"4","x":0,"y":4,"w":1,"h":1},{"i":"5","x":0,"y":5,"w":1,"h":1}],"cols":1,"allowOverlap":false,"compactType":"horizontal"}},"columnGap":["10px"],"rowGap":["30px"],"gridTemplateLink_Extra":false,"customCSS_Extra":"{CURRENT}{\nalign-items:end;\n}"}} -->
<div class="gsbp-3331f1e"><!-- wp:greenshift-blocks/element {"id":"gsbp-543600e","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-543600e"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-37fca31","inlineCssStyles":".gsbp-513ba103l{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease, all 0.5s ease);}","type":"no","className":"size-transition","localId":"gsbp-513ba103l","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease, all 0.5s ease)"]}} -->
<div class="size-transition gsbp-513ba103l"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e519d9a","textContent":"Ease","className":"size-title","localId":"gsbp-e519d9a"} -->
<div class="size-title">Ease</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-b225e9c","textContent":"all 0.5s ease","className":"size-value","localId":"gsbp-b225e9c"} -->
<div class="size-value">all 0.5s ease</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-70195fb","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease","className":"size-var","localId":"gsbp-70195fb"} -->
<div class="size-var">--wp--custom--transition--ease</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-afb1b98","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-afb1b98"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-c1c86e8","inlineCssStyles":".gsbp-5917dea3o{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease-in-out, all 0.3s ease-in-out);}","type":"no","className":"size-transition","localId":"gsbp-5917dea3o","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease-in-out, all 0.3s ease-in-out)"]}} -->
<div class="size-transition gsbp-5917dea3o"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4349449","textContent":"Ease In Out","className":"size-title","localId":"gsbp-4349449"} -->
<div class="size-title">Ease In Out</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4e0a9cb","textContent":"all 0.3s ease-in-out","className":"size-value","localId":"gsbp-4e0a9cb"} -->
<div class="size-value">all 0.3s ease-in-out</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7f9a401","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dease-in-out","className":"size-var","localId":"gsbp-7f9a401"} -->
<div class="size-var">--wp--custom--transition--ease-in-out</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0ae165a","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-0ae165a"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-9bc6492","inlineCssStyles":".gsbp-8e0c8dd3k{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dcreative, all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1));}","type":"no","className":"size-transition","localId":"gsbp-8e0c8dd3k","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dcreative, all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1))"]}} -->
<div class="size-transition gsbp-8e0c8dd3k"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-81a0ef8","textContent":"Creative","className":"size-title","localId":"gsbp-81a0ef8"} -->
<div class="size-title">Creative</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-956849e","textContent":"all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1)","className":"size-value","localId":"gsbp-956849e"} -->
<div class="size-value">all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e4858b3","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dcreative","className":"size-var","localId":"gsbp-e4858b3"} -->
<div class="size-var">--wp--custom--transition--creative</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-fcf2793","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-fcf2793"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-41621b3","inlineCssStyles":".gsbp-9c940d3k{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsoft, all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1));}","type":"no","className":"size-transition","localId":"gsbp-9c940d3k","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsoft, all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1))"]}} -->
<div class="size-transition gsbp-9c940d3k"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-77d87a5","textContent":"Soft","className":"size-title","localId":"gsbp-77d87a5"} -->
<div class="size-title">Soft</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-6a9f87c","textContent":"all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)","className":"size-value","localId":"gsbp-6a9f87c"} -->
<div class="size-value">all 0.5s cubic-bezier(0.215, 0.61, 0.355, 1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-8d92a40","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsoft","className":"size-var","localId":"gsbp-8d92a40"} -->
<div class="size-var">--wp--custom--transition--soft</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5affd83","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-5affd83"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-1a74d0f","inlineCssStyles":".gsbp-30797f12l{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmild, all 0.5s cubic-bezier(0.47, 0, 0.07, 1));}","type":"no","className":"size-transition","localId":"gsbp-30797f12l","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dsmall, 10px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmild, all 0.5s cubic-bezier(0.47, 0, 0.07, 1))"]}} -->
<div class="size-transition gsbp-30797f12l"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ad0965e","textContent":"Mild","className":"size-title","localId":"gsbp-ad0965e"} -->
<div class="size-title">Mild</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-88716a3","textContent":"all 0.5s cubic-bezier(0.47, 0, 0.07, 1)","className":"size-value","localId":"gsbp-88716a3"} -->
<div class="size-value">all 0.5s cubic-bezier(0.47, 0, 0.07, 1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-83cfec7","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmild","className":"size-var","localId":"gsbp-83cfec7"} -->
<div class="size-var">--wp--custom--transition--mild</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a357f20","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-a357f20"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-1732bb6","inlineCssStyles":".gsbp-wh01v23js{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002delegant, all 0.5s cubic-bezier(0.35, 0.11, 0.22, 1.16));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23js","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002delegant, all 0.5s cubic-bezier(0.35, 0.11, 0.22, 1.16))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23js"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d12f8e3","textContent":"Elegant","className":"size-title","localId":"gsbp-d12f8e3"} -->
<div class="size-title">Elegant</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5d1047a","textContent":"all 0.5s cubic-bezier(0.35, 0.11, 0.22, 1.16)","className":"size-value","localId":"gsbp-5d1047a"} -->
<div class="size-value">all 0.5s cubic-bezier(0.35, 0.11, 0.22, 1.16)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-de80f39","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002delegant","className":"size-var","localId":"gsbp-de80f39"} -->
<div class="size-var">--wp--custom--transition--elegant</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7018450","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-7018450"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-38d7745","inlineCssStyles":".gsbp-wh01v23jas{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsmooth, all 1s cubic-bezier(0.66,0,0.34,1));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23jas","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsmooth, all 1s cubic-bezier(0.66,0,0.34,1))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23jas"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7ee5467","textContent":"Smooth","className":"size-title","localId":"gsbp-7ee5467"} -->
<div class="size-title">Smooth</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2c4857f","textContent":"all 1s cubic-bezier(0.66,0,0.34,1)","className":"size-value","localId":"gsbp-2c4857f"} -->
<div class="size-value">all 1s cubic-bezier(0.66,0,0.34,1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-d542356","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dsmooth","className":"size-var","localId":"gsbp-d542356"} -->
<div class="size-var">--wp--custom--transition--smooth</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0f6e550","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-0f6e550"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-baffdda","inlineCssStyles":".gsbp-wh01v23jwe{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002daccent, all 1s cubic-bezier(0.48,0.04,0.52,0.96));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23jwe","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002daccent, all 1s cubic-bezier(0.48,0.04,0.52,0.96))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23jwe"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-505f58e","textContent":"Accent","className":"size-title","localId":"gsbp-505f58e"} -->
<div class="size-title">Accent</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e6ea64e","textContent":"all 1s cubic-bezier(0.48,0.04,0.52,0.96)","className":"size-value","localId":"gsbp-e6ea64e"} -->
<div class="size-value">all 1s cubic-bezier(0.48,0.04,0.52,0.96)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4b7264d","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002daccent","className":"size-var","localId":"gsbp-4b7264d"} -->
<div class="size-var">--wp--custom--transition--accent</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a11be37","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-a11be37"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-65b9723","inlineCssStyles":".gsbp-wh01v23jrr{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmotion, all 1s cubic-bezier(0.84,0,0.16,1));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23jrr","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmotion, all 1s cubic-bezier(0.84,0,0.16,1))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23jrr"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-70f01c8","textContent":"Motion","className":"size-title","localId":"gsbp-70f01c8"} -->
<div class="size-title">Motion</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-74a020e","textContent":"all 1s cubic-bezier(0.84,0,0.16,1)","className":"size-value","localId":"gsbp-74a020e"} -->
<div class="size-value">all 1s cubic-bezier(0.84,0,0.16,1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5765d6a","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dmotion","className":"size-var","localId":"gsbp-5765d6a"} -->
<div class="size-var">--wp--custom--transition--motion</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5534b65","dynamicGClasses":[{"value":"size-square","type":"local","label":"size-square","localed":false,"css":"","attributes":[],"originalID":"gsbp-wh01","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"size-square","localId":"gsbp-5534b65"} -->
<div class="size-square"><!-- wp:greenshift-blocks/element {"id":"gsbp-cc58fa1","inlineCssStyles":".gsbp-wh01v23jqw{border-bottom-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-bottom-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-left-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);border-top-right-radius:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px);transition:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dlight, all 1s cubic-bezier(0.4,0.8,0.74,1));}","type":"no","className":"size-transition","localId":"gsbp-wh01v23jqw","staticLocalId":true,"styleAttributes":{"borderBottomLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderBottomRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopLeftRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderTopRightRadius":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dborder-radius\u002d\u002dmedium, 15px)"],"borderRadiusCustom_Extra":false,"borderRadiusLink_Extra":true,"transition":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dlight, all 1s cubic-bezier(0.4,0.8,0.74,1))"]},"enableSpecificity":false} -->
<div class="size-transition gsbp-wh01v23jqw"></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-24063e1","textContent":"Light","className":"size-title","localId":"gsbp-24063e1"} -->
<div class="size-title">Light</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-dc1d555","textContent":"all 1s cubic-bezier(0.4,0.8,0.74,1)","className":"size-value","localId":"gsbp-dc1d555"} -->
<div class="size-value">all 1s cubic-bezier(0.4,0.8,0.74,1)</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e4645b0","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dtransition\u002d\u002dlight","className":"size-var","localId":"gsbp-e4645b0"} -->
<div class="size-var">--wp--custom--transition--light</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0c5cc78","anchor":"extra","type":"inner","localId":"gsbp-0c5cc78","align":"wide","metadata":{"name":"Extra"}} -->
<div class="alignwide" id="extra"><!-- wp:greenshift-blocks/element {"id":"gsbp-24a9e7a","dynamicGClasses":[{"value":"brand-panel-wrap","type":"local","label":"brand-panel-wrap","localed":false,"css":"","attributes":[],"originalID":"gspb-DTHotu2","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-wrap","localId":"gsbp-24a9e7a","align":"wide","metadata":{"name":"Title"}} -->
<div class="brand-panel-wrap alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-bbe767f","dynamicGClasses":[{"value":"brand-panel-title","type":"local","label":"brand-panel-title","localed":false,"css":"","attributes":[],"originalID":"gsbp-7bc0611","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Extra","className":"brand-panel-title","localId":"gsbp-bbe767f","isVariation":"divtext"} -->
<div class="brand-panel-title">Extra</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-a43bb12","inlineCssStyles":".gsbp-a43bb12{display:flex;flex-direction:column;column-gap:0px;row-gap:0px;justify-content:flex-start;color:rgba(0,0,0,1);}","type":"inner","localId":"gsbp-a43bb12","styleAttributes":{"display":["flex"],"flexDirection":["column"],"columnGap":["0px"],"rowGap":["0px"],"justifyContent":["flex-start"],"color":["rgba(0,0,0,1)"]}} -->
<div class="gsbp-a43bb12"><!-- wp:greenshift-blocks/element {"id":"gsbp-b5de3db","dynamicGClasses":[{"value":"brand-panel-subtitle","type":"local","label":"brand-panel-subtitle","localed":false,"css":"","attributes":[],"originalID":"gspb-7UE8MMY","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Additional styles","className":"brand-panel-subtitle","localId":"gsbp-b5de3db"} -->
<div class="brand-panel-subtitle">Additional styles</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2699172","dynamicGClasses":[{"value":"brand-panel-subsub","type":"local","label":"brand-panel-subsub","localed":false,"css":"","attributes":[],"originalID":"gspb-gf0ZxC0","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"textContent":"Extra Presets","className":"brand-panel-subsub","localId":"gsbp-2699172"} -->
<div class="brand-panel-subsub">Extra Presets</div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2e89781","dynamicGClasses":[{"value":"brand-panel-content","type":"local","label":"brand-panel-content","localed":false,"css":"","attributes":[],"originalID":"gspb-ZzWr1uD","originalBlock":"greenshift-blocks/element","tag":"div","selectors":[]}],"type":"inner","className":"brand-panel-content","localId":"gsbp-2e89781","align":"wide","metadata":{"name":"Content"}} -->
<div class="brand-panel-content alignwide"><!-- wp:greenshift-blocks/element {"id":"gsbp-e1d8ec8","inlineCssStyles":"@media (max-width: 575.98px){.gsbp-e1d8ec8 td{line-height:19px;}}@media (max-width: 575.98px){.gsbp-e1d8ec8{display:block;overflow-x:auto;}}.gsbp-e1d8ec8{border-collapse:collapse;table-layout:fixed;}.gsbp-e1d8ec8 td{padding-top:10px;padding-bottom:10px;padding-right:12px;padding-left:12px;border-style:solid;border-width:1px;border-color:#00000012;font-size:14px;}.gsbp-e1d8ec8 th{padding-top:6px;padding-bottom:6px;padding-right:12px;padding-left:12px;border-style:solid;border-width:1px;border-color:#00000012;font-size:16px;background-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dlightbg, #cddceb21);}.gsbp-e1d8ec8{width:100%;}","dynamicGClasses":[{"value":"table-colors","type":"local","label":"table-colors","localed":false,"css":"","attributes":[],"originalID":"gsbp-44f14a4","originalBlock":"greenshift-blocks/element","tag":"table","selectors":[]}],"tag":"table","type":"inner","className":"table-colors","localId":"gsbp-e1d8ec8","tableAttributes":{"table":{"responsive":"yes"},"td":{"typography":{"textShadow":[],"line_height":[null,null,null,"19px"]}}},"tableStyles":{"table":{"layout":"fixed","border":"collapse"},"responsive":"yes","td":{"paddingTop":["10px"],"paddingBottom":["10px"],"paddingRight":["12px"],"paddingLeft":["12px"],"borderStyle":"solid","borderWidth":"1px","borderColor":"#00000012","fontSize":["14px"]},"th":{"paddingTop":["6px"],"paddingBottom":["6px"],"paddingRight":["12px"],"paddingLeft":["12px"],"borderStyle":"solid","borderWidth":"1px","borderColor":"#00000012","fontSize":["16px"],"backgroundColor":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dlightbg, #cddceb21)"}},"styleAttributes":{"width":["100%"]}} -->
<table class="table-colors gsbp-e1d8ec8"><!-- wp:greenshift-blocks/element {"id":"gsbp-7b3afc3","tag":"tr","type":"inner","localId":"gsbp-7b3afc3"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-6ebf112","inlineCssStyles":"table td.gsbp-6ebf112{width:75px;}","tag":"td","type":"inner","localId":"gsbp-6ebf112","styleAttributes":{"width":["75px"]}} -->
<td class="gsbp-6ebf112"><!-- wp:greenshift-blocks/element {"id":"gsbp-d727d81","inlineCssStyles":".gsbp-d727d81{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dbackground-color, rgba(0, 0, 0, 0.8));}","type":"no","className":"color-table-color","localId":"gsbp-d727d81","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dbackground-color, rgba(0, 0, 0, 0.8))"]}} -->
<div class="color-table-color gsbp-d727d81"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-634485e","tag":"td","type":"inner","localId":"gsbp-634485e"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-093d21d","textContent":"Lightbox Background","className":"color-title-table","localId":"gsbp-093d21d","isVariation":"divtext"} -->
<div class="color-title-table">Lightbox Background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5867640","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dbackground-color","className":"color-var-table","localId":"gsbp-5867640","isVariation":"divtext"} -->
<div class="color-var-table">--wp--custom--lightbox--background-color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2638725","tag":"td","type":"inner","localId":"gsbp-2638725"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5a22f88","textContent":"Lightbox Background","className":"color-table-desc","localId":"gsbp-5a22f88","isVariation":"divtext"} -->
<div class="color-table-desc">Lightbox Background</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3fc15cf","tag":"tr","type":"inner","localId":"gsbp-3fc15cf"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-156eb2d","tag":"td","type":"inner","localId":"gsbp-156eb2d"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-31ff865","inlineCssStyles":".gsbp-31ff865{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dclose-button\u002d\u002dbackground-color, rgba(0, 0, 0, 0.5));}","type":"no","className":"color-table-color","localId":"gsbp-31ff865","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dclose-button\u002d\u002dbackground-color, rgba(0, 0, 0, 0.5))"]}} -->
<div class="color-table-color gsbp-31ff865"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-91bdeb0","tag":"td","type":"inner","localId":"gsbp-91bdeb0"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-9406b9e","textContent":"Lighbox Close Button Background","className":"color-title-table","localId":"gsbp-9406b9e","isVariation":"divtext"} -->
<div class="color-title-table">Lighbox Close Button Background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-e0f71a2","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dlightbox\u002d\u002dclose-button\u002d\u002dbackground-color","className":"color-var-table","localId":"gsbp-e0f71a2","isVariation":"divtext"} -->
<div class="color-var-table">--wp--custom--lightbox--close-button--background-color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1933ad6","tag":"td","type":"inner","localId":"gsbp-1933ad6"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5dada0b","textContent":"Background for lightbox and sliding panel close buton","className":"color-table-desc","localId":"gsbp-5dada0b","isVariation":"divtext"} -->
<div class="color-table-desc">Background for lightbox and sliding panel close buton</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-63aab0e","tag":"tr","type":"inner","localId":"gsbp-63aab0e"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-459ae83","tag":"td","type":"inner","localId":"gsbp-459ae83"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-1c918ad","inlineCssStyles":".gsbp-1c918ad{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dclose-button\u002d\u002dcolor, #ffffff);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-1c918ad","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dclose-button\u002d\u002dcolor, #ffffff)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dcolor\u002d\u002dborder, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-1c918ad"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-627cac8","tag":"td","type":"inner","localId":"gsbp-627cac8"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-2cf49e8","textContent":"Lighbox Close button icon color","className":"color-title-table","localId":"gsbp-2cf49e8","isVariation":"divtext"} -->
<div class="color-title-table">Lighbox Close button icon color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0ce7a21","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dclose-button\u002d\u002dcolor","className":"color-var-table","localId":"gsbp-0ce7a21","isVariation":"divtext"} -->
<div class="color-var-table">--wp--custom--close-button--color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-1114e3c","tag":"td","type":"inner","localId":"gsbp-1114e3c"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-fb487b6","textContent":"Lighbox close button color","className":"color-table-desc","localId":"gsbp-fb487b6","isVariation":"divtext"} -->
<div class="color-table-desc">Lighbox close button color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-3706c3a","tag":"tr","type":"inner","localId":"gsbp-3706c3a"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-907a3c4","tag":"td","type":"inner","localId":"gsbp-907a3c4"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-a16442c","inlineCssStyles":".gsbp-a16442c{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dbackground-color, #000);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-a16442c","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dbackground-color, #000)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-a16442c"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4c21d58","tag":"td","type":"inner","localId":"gsbp-4c21d58"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-82fb78d","textContent":"Sliding panel background","className":"color-title-table","localId":"gsbp-82fb78d","isVariation":"divtext"} -->
<div class="color-title-table">Sliding panel background</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-22b6a05","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dbackground-color","className":"color-var-table","localId":"gsbp-22b6a05","isVariation":"divtext"} -->
<div class="color-var-table">--wp--custom--panel--background-color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-16d7f2c","tag":"td","type":"inner","localId":"gsbp-16d7f2c"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-2cc734f","textContent":"Sliding panel default background color","className":"color-table-desc","localId":"gsbp-2cc734f","isVariation":"divtext"} -->
<div class="color-table-desc">Sliding panel default background color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-0ebbdb7","tag":"tr","type":"inner","localId":"gsbp-0ebbdb7"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-73908c1","tag":"td","type":"inner","localId":"gsbp-73908c1"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-eefe6e0","inlineCssStyles":".gsbp-eefe6e0{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor, #fff);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-eefe6e0","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor, #fff)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-eefe6e0"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-4315203","tag":"td","type":"inner","localId":"gsbp-4315203"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-5d3f668","textContent":"Sliding panel text color","className":"color-title-table","localId":"gsbp-5d3f668","isVariation":"divtext"} -->
<div class="color-title-table">Sliding panel text color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-2d361e7","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor","className":"color-var-table","localId":"gsbp-2d361e7","isVariation":"divtext"} -->
<div class="color-var-table">--wp--custom--panel--color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-5b45afd","tag":"td","type":"inner","localId":"gsbp-5b45afd"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-9ddffcf","textContent":"Sliding panel Text default color","className":"color-table-desc","localId":"gsbp-9ddffcf","isVariation":"divtext"} -->
<div class="color-table-desc">Sliding panel Text default color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-87993da","tag":"tr","type":"inner","localId":"gsbp-87993da"} -->
<tr><!-- wp:greenshift-blocks/element {"id":"gsbp-a6e98c6","tag":"td","type":"inner","localId":"gsbp-a6e98c6"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-c240192","inlineCssStyles":".gsbp-c240192{background-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor-a, #fff);border-width:1px;border-style:solid;border-color:var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012);}","type":"no","className":"color-table-color","localId":"gsbp-c240192","styleAttributes":{"backgroundColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor-a, #fff)"],"borderWidth":["1px"],"borderStyle":["solid"],"borderColor":["var(\u002d\u002dwp\u002d\u002dcustom\u002d\u002dedges-color, #00000012)"],"borderCustom_Extra":false,"borderLink_Extra":false}} -->
<div class="color-table-color gsbp-c240192"></div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-bb74ee3","tag":"td","type":"inner","localId":"gsbp-bb74ee3"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-123ab97","textContent":"Sliding panel links color","className":"color-title-table","localId":"gsbp-123ab97","isVariation":"divtext"} -->
<div class="color-title-table">Sliding panel links color</div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-7030a26","textContent":"\u002d\u002dwp\u002d\u002dcustom\u002d\u002dpanel\u002d\u002dcolor-a","className":"color-var-table","localId":"gsbp-7030a26","isVariation":"divtext"} -->
<div class="color-var-table">--wp--custom--panel--color-a</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:greenshift-blocks/element {"id":"gsbp-ad74869","tag":"td","type":"inner","localId":"gsbp-ad74869"} -->
<td><!-- wp:greenshift-blocks/element {"id":"gsbp-e875b5b","textContent":"Sliding panel Links default color","className":"color-table-desc","localId":"gsbp-e875b5b","isVariation":"divtext"} -->
<div class="color-table-desc">Sliding panel Links default color</div>
<!-- /wp:greenshift-blocks/element --></td>
<!-- /wp:greenshift-blocks/element --></tr>
<!-- /wp:greenshift-blocks/element --></table>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph --></div>
<!-- /wp:greenshift-blocks/element --></div>
<!-- /wp:greenshift-blocks/element -->