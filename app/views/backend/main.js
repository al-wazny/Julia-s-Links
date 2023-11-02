const app = Vue.createApp({
    data() {
        return {
            title: 'Vue is still working'
        }
    },
    methods: {
        addElement(e) {
            let parent = e.target.closest('.card')
            
            let componentContainer = parent.getElementsByClassName('components')[0];
            let component = parent.getElementsByClassName('card')[0].cloneNode(true);

            let componentName = component.getElementsByClassName('component-name')[0];
            
            const match = componentName.innerText.match(/\d+$/);

            const formattedNumber = String(++match[0]).padStart(2, '0');
            const newElementName = componentName.innerText.replace(/\d+$/, formattedNumber)

            componentName.innerText = newElementName;
            console.log(component);
            componentContainer.appendChild(component);
        }
        //? maybe create an api that returns the data to edit and call it in here to create all the components
    }
})

app.mount('#app')