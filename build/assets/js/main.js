"use strict";

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); Object.defineProperty(Constructor, "prototype", { writable: false }); return Constructor; }

var fancySwiper = new Swiper('#processSwiper', {
  direction: 'horizontal',
  loop: true,
  speed: 500,
  spaceBetween: 34,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  slidesPerView: '1',
  pagination: {
    el: '.process-parent__navigation',
    clickable: true
  }
});
var cafeSwiper = new Swiper('#resultSeiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: false,
  speed: 400,
  effect: 'cards',
  slidesPerView: '1',
  // Navigation arrows
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev'
  }
});
var faqBlocks = document.querySelectorAll('.faq-parent__block');
faqBlocks.forEach(function (block) {
  block.addEventListener('click', function () {
    if (!block.classList.contains('faq-parent__block--active')) {
      block.classList.add('faq-parent__block--active');
    } else {
      block.classList.remove('faq-parent__block--active');
    }
  });
});
AOS.init();

var preload = function preload() {
  var manager = new THREE.LoadingManager();

  manager.onLoad = function () {
    var environment = new Environment(typo, particle);
  };

  var typo = null;
  var loader = new THREE.FontLoader(manager);
  var font = loader.load('https://res.cloudinary.com/dydre7amr/raw/upload/v1612950355/font_zsd4dr.json', function (font) {
    typo = font;
  });
  var particle = new THREE.TextureLoader(manager).load('https://res.cloudinary.com/dfvtkoboz/image/upload/v1605013866/particle_a64uzf.png');
};

if (document.readyState === 'complete' || document.readyState !== 'loading' && !document.documentElement.doScroll) preload();else document.addEventListener('DOMContentLoaded', preload);

var Environment = /*#__PURE__*/function () {
  function Environment(font, particle) {
    _classCallCheck(this, Environment);

    this.font = font;
    this.particle = particle;
    this.container = document.querySelector('#magic');
    this.scene = new THREE.Scene();
    this.createCamera();
    this.createRenderer();
    this.setup();
    this.bindEvents();
  }

  _createClass(Environment, [{
    key: "bindEvents",
    value: function bindEvents() {
      window.addEventListener('resize', this.onWindowResize.bind(this));
    }
  }, {
    key: "setup",
    value: function setup() {
      this.createParticles = new CreateParticles(this.scene, this.font, this.particle, this.camera, this.renderer);
    }
  }, {
    key: "render",
    value: function render() {
      this.createParticles.render();
      this.renderer.render(this.scene, this.camera);
    }
  }, {
    key: "createCamera",
    value: function createCamera() {
      this.camera = new THREE.PerspectiveCamera(65, this.container.clientWidth / this.container.clientHeight, 1, 10000);
      this.camera.position.set(0, 70, 100);
    }
  }, {
    key: "createRenderer",
    value: function createRenderer() {
      var _this = this;

      this.renderer = new THREE.WebGLRenderer();
      this.renderer.setSize(this.container.clientWidth, this.container.clientHeight);
      this.renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
      this.renderer.outputEncoding = THREE.sRGBEncoding;
      this.container.appendChild(this.renderer.domElement);
      this.renderer.setAnimationLoop(function () {
        _this.render();
      });
    }
  }, {
    key: "onWindowResize",
    value: function onWindowResize() {
      this.camera.aspect = this.container.clientWidth / this.container.clientHeight;
      this.camera.updateProjectionMatrix();
      this.renderer.setSize(this.container.clientWidth, this.container.clientHeight);
    }
  }]);

  return Environment;
}();

var CreateParticles = /*#__PURE__*/function () {
  function CreateParticles(scene, font, particleImg, camera, renderer) {
    _classCallCheck(this, CreateParticles);

    this.scene = scene;
    this.font = font;
    this.particleImg = particleImg;
    this.camera = camera;
    this.renderer = renderer;
    this.raycaster = new THREE.Raycaster();
    this.mouse = new THREE.Vector2(-200, 200);
    this.colorChange = new THREE.Color();
    this.buttom = false;
    this.data = {
      text: '?',
      amount: 1500,
      particleSize: 1,
      particleColor: 0xffffff,
      textSize: 80,
      area: 250,
      ease: .05
    };
    this.setup();
    this.bindEvents();
  }

  _createClass(CreateParticles, [{
    key: "setup",
    value: function setup() {
      var geometry = new THREE.PlaneGeometry(this.visibleWidthAtZDepth(100, this.camera), this.visibleHeightAtZDepth(100, this.camera));
      var material = new THREE.MeshBasicMaterial({
        color: 0x00ff00,
        transparent: true
      });
      this.planeArea = new THREE.Mesh(geometry, material);
      this.planeArea.visible = false;
      this.createText();
    }
  }, {
    key: "bindEvents",
    value: function bindEvents() {
      document.addEventListener('mousedown', this.onMouseDown.bind(this));
      document.addEventListener('mousemove', this.onMouseMove.bind(this));
      document.addEventListener('mouseup', this.onMouseUp.bind(this));
    }
  }, {
    key: "onMouseDown",
    value: function onMouseDown() {
      this.mouse.x = event.clientX / window.innerWidth * 2 - 1;
      this.mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
      var vector = new THREE.Vector3(this.mouse.x, this.mouse.y, 0.5);
      vector.unproject(this.camera);
      var dir = vector.sub(this.camera.position).normalize();
      var distance = -this.camera.position.z / dir.z;
      this.currenPosition = this.camera.position.clone().add(dir.multiplyScalar(distance));
      var pos = this.particles.geometry.attributes.position;
      this.buttom = true;
      this.data.ease = .01;
    }
  }, {
    key: "onMouseUp",
    value: function onMouseUp() {
      this.buttom = false;
      this.data.ease = .05;
    }
  }, {
    key: "onMouseMove",
    value: function onMouseMove() {
      this.mouse.x = event.clientX / window.innerWidth * 2 - 1;
      this.mouse.y = -(event.clientY / window.innerHeight) * 2 + 1;
    }
  }, {
    key: "render",
    value: function render(level) {
      var time = .001 * performance.now() % 12 / 12;
      var zigzagTime = (1 + Math.sin(time * 2 * Math.PI)) / 6;
      this.raycaster.setFromCamera(this.mouse, this.camera);
      var intersects = this.raycaster.intersectObject(this.planeArea);

      if (intersects.length > 0) {
        var pos = this.particles.geometry.attributes.position;
        var copy = this.geometryCopy.attributes.position;
        var coulors = this.particles.geometry.attributes.customColor;
        var size = this.particles.geometry.attributes.size;
        var mx = intersects[0].point.x;
        var my = intersects[0].point.y;
        var mz = intersects[0].point.z;

        for (var i = 0, l = pos.count; i < l; i++) {
          var initX = copy.getX(i);
          var initY = copy.getY(i);
          var initZ = copy.getZ(i);
          var px = pos.getX(i);
          var py = pos.getY(i);
          var pz = pos.getZ(i);
          this.colorChange.setHSL(.5, 1, 1);
          coulors.setXYZ(i, this.colorChange.r, this.colorChange.g, this.colorChange.b);
          coulors.needsUpdate = true;
          size.array[i] = this.data.particleSize;
          size.needsUpdate = true;
          var dx = mx - px;
          var dy = my - py;
          var dz = mz - pz;
          var mouseDistance = this.distance(mx, my, px, py);
          var d = (dx = mx - px) * dx + (dy = my - py) * dy;
          var f = -this.data.area / d;

          if (this.buttom) {
            var t = Math.atan2(dy, dx);
            px -= f * Math.cos(t);
            py -= f * Math.sin(t); // this.colorChange.setHSL( .5 + zigzagTime, 1.0 , .5 )

            this.colorChange.setHSL(357 / 360, 1.0, .67); // particles in center color

            coulors.setXYZ(i, this.colorChange.r, this.colorChange.g, this.colorChange.b);
            coulors.needsUpdate = true;

            if (px > initX + 70 || px < initX - 70 || py > initY + 70 || py < initY - 70) {
              // this.colorChange.setHSL( .15, 1.0 , .5 )
              this.colorChange.setHex(0xFF585F); // particles mousedown color

              coulors.setXYZ(i, this.colorChange.r, this.colorChange.g, this.colorChange.b);
              coulors.needsUpdate = true;
            }
          } else {
            if (mouseDistance < this.data.area) {
              if (i % 5 == 0) {
                var _t = Math.atan2(dy, dx);

                px -= .03 * Math.cos(_t);
                py -= .03 * Math.sin(_t); // this.colorChange.setHSL( .15 , 1.0 , .5 )

                this.colorChange.setHSL(357 / 360, 1.0, .67); // color text back

                coulors.setXYZ(i, this.colorChange.r, this.colorChange.g, this.colorChange.b);
                coulors.needsUpdate = true;
                size.array[i] = this.data.particleSize / 1.2;
                size.needsUpdate = true;
              } else {
                var _t2 = Math.atan2(dy, dx);

                px += f * Math.cos(_t2);
                py += f * Math.sin(_t2);
                pos.setXYZ(i, px, py, pz);
                pos.needsUpdate = true;
                size.array[i] = this.data.particleSize * 1.3;
                size.needsUpdate = true;
              }

              if (px > initX + 10 || px < initX - 10 || py > initY + 10 || py < initY - 10) {
                // this.colorChange.setHSL( .15, 1.0 , .5 )
                this.colorChange.setHex(0xFF585F); // hover line effect

                coulors.setXYZ(i, this.colorChange.r, this.colorChange.g, this.colorChange.b);
                coulors.needsUpdate = true;
                size.array[i] = this.data.particleSize / 1.8;
                size.needsUpdate = true;
              }
            }
          }

          px += (initX - px) * this.data.ease;
          py += (initY - py) * this.data.ease;
          pz += (initZ - pz) * this.data.ease;
          pos.setXYZ(i, px, py, pz);
          pos.needsUpdate = true;
        }
      }
    }
  }, {
    key: "createText",
    value: function createText() {
      var _this2 = this;

      var thePoints = [];
      var shapes = this.font.generateShapes(this.data.text, this.data.textSize);
      var geometry = new THREE.ShapeGeometry(shapes);
      geometry.computeBoundingBox();
      var xMid = -0.5 * (geometry.boundingBox.max.x - geometry.boundingBox.min.x);
      var yMid = (geometry.boundingBox.max.y - geometry.boundingBox.min.y) / 2.85;
      geometry.center();
      geometry.boundingBox.max = 0;
      geometry.boundingBox.min = 12;
      console.log(geometry);
      var holeShapes = [];

      for (var q = 0; q < shapes.length; q++) {
        var shape = shapes[q];

        if (shape.holes && shape.holes.length > 0) {
          for (var j = 0; j < shape.holes.length; j++) {
            var hole = shape.holes[j];
            holeShapes.push(hole);
          }
        }
      }

      shapes.push.apply(shapes, holeShapes);
      var colors = [];
      var sizes = [];

      for (var x = 0; x < shapes.length; x++) {
        var _shape = shapes[x];
        var amountPoints = _shape.type == 'Path' ? this.data.amount / 2 : this.data.amount;

        var points = _shape.getSpacedPoints(amountPoints);

        points.forEach(function (element, z) {
          var a = new THREE.Vector3(element.x, element.y, 0);
          thePoints.push(a);
          colors.push(_this2.colorChange.r, _this2.colorChange.g, _this2.colorChange.b);
          sizes.push(1);
        });
      }

      var geoParticles = new THREE.BufferGeometry().setFromPoints(thePoints);
      geoParticles.translate(xMid, yMid, 0);
      geoParticles.setAttribute('customColor', new THREE.Float32BufferAttribute(colors, 3));
      geoParticles.setAttribute('size', new THREE.Float32BufferAttribute(sizes, 1));
      var material = new THREE.ShaderMaterial({
        uniforms: {
          color: {
            value: new THREE.Color(0xffffff)
          },
          pointTexture: {
            value: this.particleImg
          }
        },
        vertexShader: document.getElementById('vertexshader').textContent,
        fragmentShader: document.getElementById('fragmentshader').textContent,
        blending: THREE.AdditiveBlending,
        depthTest: false,
        transparent: true
      });
      this.particles = new THREE.Points(geoParticles, material);
      this.scene.add(this.particles);
      this.scene.background = new THREE.Color(0x2B1E36); // color bg

      this.geometryCopy = new THREE.BufferGeometry();
      this.geometryCopy.copy(this.particles.geometry);
    }
  }, {
    key: "visibleHeightAtZDepth",
    value: function visibleHeightAtZDepth(depth, camera) {
      var cameraOffset = camera.position.z;
      if (depth < cameraOffset) depth -= cameraOffset;else depth += cameraOffset;
      var vFOV = camera.fov * Math.PI / 180;
      return 2 * Math.tan(vFOV / 2) * Math.abs(depth);
    }
  }, {
    key: "visibleWidthAtZDepth",
    value: function visibleWidthAtZDepth(depth, camera) {
      var height = this.visibleHeightAtZDepth(depth, camera);
      return height * camera.aspect;
    }
  }, {
    key: "distance",
    value: function distance(x1, y1, x2, y2) {
      return Math.sqrt(Math.pow(x1 - x2, 2) + Math.pow(y1 - y2, 2));
    }
  }]);

  return CreateParticles;
}();