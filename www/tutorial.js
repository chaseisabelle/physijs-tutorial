'use strict';

Physijs.scripts.worker = 'physijs_worker.js';
Physijs.scripts.ammo = 'ammo.js';

var initScene, render, renderer, scene, camera, box;

$(function() {
    var viewport = $('#viewport');

    renderer = new THREE.WebGLRenderer({ antialias: true });

    renderer.setSize(viewport.innerWidth, viewport.innerHeight);
    viewport.domElement.appendChild($(renderer.domElement));

    scene = new Physijs.Scene;

    camera = new THREE.PerspectiveCamera(
        35,
        window.innerWidth / window.innerHeight,
        1,
        1000
    );

    scene.setGravity ({x:0, y:-1, z:0});

    camera.position.set( 60, 50, 60 );
    camera.lookAt( scene.position );
    scene.add( camera );

    // Box
    box = new Physijs.BoxMesh(
        new THREE.CubeGeometry( 5, 5, 5 ),
        new THREE.MeshBasicMaterial({ color: 0x888888 })
    );
    scene.add( box );

    requestAnimationFrame( render );
});

render = function() {
    scene.simulate(); // run physics
    renderer.render( scene, camera); // render the scene
    requestAnimationFrame( render );
};