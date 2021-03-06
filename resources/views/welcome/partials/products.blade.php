<div class="steps">
    <div class="step-item is-completed is-success">
        <div class="step-marker">
            <span class="icon">
                <i class="fa fa-check"></i>
            </span>
        </div>
        <div class="step-details">
            <p class="step-title">Contact</p>
        </div>
    </div>
    <div class="step-item is-active">
        <div class="step-marker">2</div>
        <div class="step-details">
            <p class="step-title">Products</p>
        </div>
    </div>
    <div class="step-item">
        <div class="step-marker">3</div>
        <div class="step-details">
            <p class="step-title">Theme</p>
        </div>
    </div>
    <div class="step-item">
        <div class="step-marker">4</div>
        <div class="step-details">
            <p class="step-title">Confirm</p>
        </div>
    </div>
    <div class="step-item">
        <div class="step-marker">5</div>
        <div class="step-details">
            <p class="step-title">Images Upload</p>
        </div>
    </div>
    <div class="step-item">
        <div class="step-marker">6</div>
        <div class="step-details">
            <p class="step-title">Content</p>
        </div>
    </div>  
    <div class="step-item">
        <div class="step-marker">
            <span class="icon">
                <i class="fa fa-flag"></i>
            </span>
        </div>
        <div class="step-details">
            <p class="step-title">Done</p>
        </div>
    </div>
</div>

<h1 class="title">
Let's get started with your website.
</h1>
<p class="subtitle">
Which of these do you require?
</p>

<div class="columns">
    <div class="column is-half">
        <div class="field">
            <input id="domain" type="checkbox" name="switch" class="switch is-rounded" v-model="selected.domain">
            <label for="domain">I require a domain for $14.95/annum</label>
        </div>

        <div class="field">
            <input id="hosting" type="checkbox" name="switch" class="switch is-rounded" v-model="selected.hosting">
            <label for="hosting">I require hosting for $6.95/month</label>
        </div>

        <div class="field is-grouped">
            <ul>
            <li><div class="field">
                <input id="agent" type="checkbox" name="switch" class="switch is-rounded" v-model="selected.agent">
                <label for="agent">GetRETS Agent Bundle (Individual) for $21.00/month </label>
            </div></li>

            <li><div class="field">
                <input id="broker" type="checkbox" name="switch" class="switch is-rounded" v-model="broker">
                <label for="broker">GetRETS Broker Bundle (Commercial) for $121.00/month</label>
            </div></li>
            </ul>
        </div>
    </div>
    <div class="column is-half">
        <p>
            Annual Price = @{{annualPrice}}<br />
            Monthly Price = @{{monthlyPrice}}<br />
            Price due upon Website delivery = @{{annualPrice + monthlyPrice}}<br />
        </p><br />
    </div>
</div>

<div class="field is-grouped is-pulled-right">
<div class="control">
    <a class="button is-warning is-outlined is-medium" v-on:click="showPage('contact')">Back</a>
    <a class="button is-primary is-outlined is-medium" v-on:click="showPage('theme')">Proceed</a>
</div>
</div>