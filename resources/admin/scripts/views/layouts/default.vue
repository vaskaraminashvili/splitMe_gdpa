<template>
    <div>
        layourt
        <iframe
            width="100%"
            height="300"
            scrolling="no"
            frameborder="no"
            allow="autoplay"
            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/1386292198&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
        ></iframe>
        <div
            style="
                font-size: 10px;
                color: #cccccc;
                line-break: anywhere;
                word-break: normal;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
                font-family: Interstate, Lucida Grande, Lucida Sans Unicode,
                    Lucida Sans, Garuda, Verdana, Tahoma, sans-serif;
                font-weight: 100;
            "
        >
            <a
                href="https://soundcloud.com/trapicalshh"
                title="Trapical&#x27;s Hidden Gems"
                target="_blank"
                style="color: #cccccc; text-decoration: none"
                >Trapical&#x27;s Hidden Gems</a
            >
            ·
            <a
                href="https://soundcloud.com/trapicalshh/unholy-yonexx-finnet"
                title="Sam Smith ft. Kim Petras - Unholy (Yonexx &amp; Finnet Remix)"
                target="_blank"
                style="color: #cccccc; text-decoration: none"
                >Sam Smith ft. Kim Petras - Unholy (Yonexx &amp; Finnet
                Remix)</a
            >
        </div>
        <slot />
        <Link href="/admin">Home</Link>
        <Link href="/admin/about">about</Link>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    components: { Link },
};
</script>

<style lang="scss" scoped></style>
