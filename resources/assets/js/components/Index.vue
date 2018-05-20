<template>
    <div>
        <div class="section" id="section0">
            <h1>
                <strong>
                    GaryNg's Blog
                </strong>
            </h1>
        </div>

        <div class="section">
           <project></project>
        </div>
    </div>
    
</template>

<script>
    import Project from './Project.vue';
    export default {
        name: 'Index',
        components: {
            'project': Project
        }
    }
</script>