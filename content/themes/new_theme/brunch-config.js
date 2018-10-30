// See http://brunch.io for documentation.
exports.files = {
  javascripts: {
    joinTo: {
      // tout les js dans app seront réunis dans js/app.js
      'js/app.js': /^app/,
      // tout les js qui sont dans node_modules seront réunis dans js/vendor.js
      'js/vendor.js': /^node_modules/
    }
  },
  // Je demande à Brunch de rassembler mon CSS dans
  stylesheets: {
    joinTo: {
      // app.css si il provient de mon dossier app
      'css/app.css': /^app/,
      // vendors.css si il ne provient pas de mon dossier app
      'css/vendor.css': /^node_modules/
    }
  }

};

exports.modules = {
  // on require le module "initialize" du fichier "app.js" pour éviter de le require dans le html
  autoRequire: {
    'js/app.js': [
      'initialize'
    ]
    // 'bootstrap',
  }
};


exports.npm = {
  enabled: true,
  globals: {
    $: 'jquery',
    jQuery: 'jquery',
    bootstrap: 'bootstrap',
  },
  styles: {
    'bootstrap': ['dist/css/bootstrap.css'],
    'font-awesome': ['css/font-awesome.css'],
    'animate.css' : ['animate.css']
  },

};

exports.plugins = {
  // Parametrage de SASS
  sass: {
    options: {
      includePaths: [
        'node_modules/bootstrap/scss'
      ]
    }
  },
  // Parametrage de copycat
  copycat: {
    // Je demande à copycat de créé un dossier "fonts" dans
    // public & de coller dedans le contenu de mon dossier
    // "fonts" présent dans "node_modules/font-awesome"
    'fonts': ['node_modules/font-awesome/fonts']
  },
  // Parametrage de Browser Sync
  browserSync: {
    files: ['*']
  },
  // cleancss: {
  //   ignored: /app\.css/
  // }
};
