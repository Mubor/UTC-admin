
const generate = (count) => {
    const getRandomInt = (max) => {
        return Math.floor(Math.random() * max);
    }
    // const sample = [
    //     {
    //         gif: `<img src="media/team1.gif" alt="teamgif">`,
    //         mesageTop: `<span class="keytext">cre@tive is </span><br>
    //         <span class="indent-mobile">
    //             the centre<span class="spec-violet">&#177</span><br> 
    //         </span> 
    //         <span class="indent">of {universe}</span><br>`,
    //         mesageBottom: `and
    //         <span class="indent indent-br">we just<br></span>
    //         <span class="indent-mobile">revolve</span> 
    //         <span class="keytext"><span class="spec-orange">$</span>around</span>`,
    //     },
    //     {
    //         gif: `<img src="media/team2.gif" alt="teamgif">`,
    //         mesageTop: `<span class="indent indent-br"><span class="keytext">whoever</span> folds</span>
    //         <span class="indent-team2 indent-br">
    //             his hands<span class="spec-violet">&#177</span>
    //         </span>
    //             <span class="indent-max indent-br">turns to</span>
    //         <span>a boring {stone}</span>`,
    //         mesageBottom: `<br><span class="indent">th@ts why<br></span>
    //         <span class="indent-team2">we always battle</span>
    //         <span class="indent-max">to the <span class="keytext"><span class="spec-orange">$</span>end</span></span>`,
    //     },
    //     {
    //         gif: `<img src="media/team3.gif" alt="teamgif">`,
    //         mesageTop: `<span class="keytext">this</span> how<span class="spec-violet">&#177</span><br>
    //         <span class="indent-team3">
    //             we {extract}<br> 
    //         </span> 
    //         <span>cre@tive</span><br>`,
    //         mesageBottom: `<span class="indent-team3">ideas and</span>
    //         <span class="indent-br">
    //             <span class="keytext"><span class="spec-orange">$</span>bolt</span>
    //         </span>
    //         <span class="indent-team3">solutions</span>`,
    //     },
    // ];

    // const teamMessage = document.getElementById('team-message');
    // const mediaContainers = [...document.querySelectorAll('.team__media')];
    
    const chosenGroup = getRandomInt(count) + 1
    const groupToShow = [...document.querySelectorAll(`div[data-group="${chosenGroup}"]`)]
    
    for (const element of groupToShow) {
        element.style.display = "block";
    }
}

export default generate;