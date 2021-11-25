<template>
    <div>
        <select>
            <option>Eins</option>
            <option>Zwei</option>
            <option>Drei</option>
        </select>
    </div>
</template>

<script>
export default {
    mixins: [Fieldtype],
    data() {
        return {
            show: false
        };
    },
    computed: {
        inputType() {
            return this.show ? 'text' : 'password';
        }
    }
};
</script>
