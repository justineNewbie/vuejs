<template>
    <div>
        <v-layout row wrap>
            <v-flex xs6>
                <v-card>
                    <v-card-text class="px-3">
                      <p> I understand and agree that by filling out this form, I am allowing
                        Technological Institute of the Philippines to collect, yse, share and disclose my personal 
                        information for medical examination and to store it as long as necessary for the fulfilment of the 
                        stated purposes and in accordance with applicable laws, including Data Privacy
                        Act of 2012 and its implementing Rules and Regulations, and the T.I.P. Privacy Policy.
                        The purpose and extent of collection, use, sharing, disclosure and storage of my
                        personal information was explained to me. Furthermore, I do not 
                        hold the school liable for the diagnostic test result and for any consequence that might arise
                        thereunto.</p>
                      <v-checkbox v-model="checkbox1" :label="`Checkbox 1: ${checkbox1.toString()}`"></v-checkbox>
                      <p class="text-xs-center"> March 2, 2019</p>
                      </v-card-text>

                      <!-- <v-flex xs4 offset-xs4>
                        
                      </v-flex>

                      <v-flex xs5 offset-xs5>
                       
                      </v-flex> -->
                      
                </v-card>
            </v-flex>
        </v-layout>
    </div>
</template>


<script>
export default {
    data () {
      return {
        checkbox1: true,
        checkbox2: false
      }
    }
  }
</script>
