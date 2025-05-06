import React from 'react';

export default function Home() {
  return (
    <main style={{ padding: 32 }}>
      <h1>Machine à Café Connectée ☕</h1>
      <section>
        <h2>État du processus</h2>
        {/* TODO: Afficher l'état en temps réel */}
      </section>
      <section>
        <h2>Commandes en file</h2>
        {/* TODO: Afficher la file d'attente */}
      </section>
      <section>
        <h2>Historique</h2>
        {/* TODO: Afficher l'historique */}
      </section>
      <section>
        <h2>Actions</h2>
        {/* TODO: Ajouter des boutons pour interagir */}
      </section>
    </main>
  );
}