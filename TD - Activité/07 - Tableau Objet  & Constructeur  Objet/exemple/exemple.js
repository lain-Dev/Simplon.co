function Personne(prenom, nom, age, genre, interets) {
    this.nom = {
      prenom,
      nom
    };
    this.age = age;
    this.genre = genre;
    this.interets = interets;
    this.bio = function() {
      alert(this.nom.prenom + ' ' + this.nom.nom + ' a ' + this.age + ' ans. Il aime ' + this.interets[0] + ' et ' + this.interets[1] + '.');
    };
    this.salutation = function() {
      alert('Bonjour ! Je m\'appelle ' + this.nom.prenom + '.');
    };
  };

  var personne1 = new Personne('Bob', 'Smith', 32, 'homme', ['musique', 'ski']);

personne1['age']
personne1.interets[1]
personne1.bio()

