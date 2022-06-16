<template>
<div id="componente">
    <GmapMap
      :center="center"
      :zoom="16"
      map-type-id="terrain"
      style="width: 100%; height: 250px"
    >
      <GmapMarker
        :key="index"
        v-for="(m, index) in markers"
        :position="m.position"
        :clickable="true"
        :draggable="true"
        @click="center = m.position"
      />
    </GmapMap>
</div>
</template>

<script>
export default {
  data() {
    return {
      setCoordsDone: false,
      center: {},
      markers: [],
    };
  },
  props: ["object"],
  async mounted() {
    this.center = {
      lat: parseFloat(this.object.latitud),
      lng: parseFloat(this.object.longitud),
    };
    this.markers.push({ position: this.center });
    this.setCoordsDone = true;
  },
};
</script>
