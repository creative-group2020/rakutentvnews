document.addEventListener('DOMContentLoaded', function() {
  var head = (document.getElementsByTagName('head'))[0],
      target = document.getElementById("ranklet-{{context.id}}");
  // {{#context.files.css.js}}
  if ( head ) { head.innerHTML += '<style id="ranklet-style-{{id}}">{{{context.files.css.js}}}</style>'; }
  // {{/context.files.css.js}}
  // {{#context.files.html.js}}
  if ( target ) { target.innerHTML = '{{{context.files.html.js}}}'; }
  // {{/context.files.html.js}}
});