var reVoicrUI = new Nexus.Rack("synth")

reVoicrUI.wet.value = 0
reVoicrUI.dist.value = 0
reVoicrUI.speed.value = 0
reVoicrUI.play.value = 0

var pd_rockafella

$.get('/audio/pd/D09.shepard.tone.pd', function(patchStr) {
  patch = Pd.loadPatch(patchStr)
  Pd.start()
})

reVoicrUI.wet.on('change',function(v) {
  var value = v;
  Pd.send('output~', [value])
  Pd.receive('output~', function(args) {
    console.log('received a message from "someName" : ', args)
  })
})