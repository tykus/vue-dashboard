<template>
    <Card class="flex flex-col justify-between">
        <div class="flex justify-between">
            <img src="https://upload.wikimedia.org/wikipedia/commons/1/19/Spotify_logo_without_text.svg" alt="" class="h-10 w-10">
            <h2 class="text-green-500 font-semibold text-2xl">Spotify</h2>
        </div>
        <div v-if="!authenticated" class="flex-1 flex items-center justify-center">
            <a class="bg-green-500 hover:bg-green-300 text-gray-900 rounded-full px-6 py-3 focus:outline-none focus:shadow-outline"
               :href="route('spotify.authorize')"
            >
                Sign in to Spotify
            </a>
        </div>
    </Card>
</template>

<script>
import Card from './Card'
export default {
    name: 'SpotifyCard',
    components: { Card },
    data () {
        return {
            authenticated: false
        }
    },
}
</script>