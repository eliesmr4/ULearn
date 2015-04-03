// Copyright 2012 Google Inc. All Rights Reserved.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//      http://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS-IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.


// When the assessment page loads, activity-generic.js will render the contents
// of the 'assessment' variable into the enclosing HTML webpage.

// For information on modifying this page, see
// https://code.google.com/p/course-builder/wiki/CreateAssessments.


var assessment = {
  // HTML to display at the start of the page
  preamble: '<b>Este es el examen final del Curso de Ecuaciones de Primer y Segundo Grado. Mucha Suerte!.</b><br><br>',

  // An ordered list of questions, with each question's type implicitly determined by the fields it possesses:
  //   choices              - multiple choice question (with exactly one correct answer)
  //   correctAnswerString  - case-insensitive string match
  //   correctAnswerRegex   - freetext regular expression match
  //   correctAnswerNumeric - freetext numeric match
  questionsList: [
    {questionHTML: 'Di cual de las siguientes ecuaciones son de Primer Grado:', // question can be plain text or arbitrary HTML
     choices: ['7x+7y=0', '3+6+7=7-9', correct('2x+2=4x-6'), '4y+7+4x', 'I don\'t know'],
     // the (optional) lesson associated with this question, which is displayed as a suggestion
     // for further study if the student answers this question incorrectly.
     lesson: '1.1'},

  {questionHTML: 'Que es lo primero que hay que hacer cuando detectamos que la ecuacion es de primer Grado?',
     choices: ['Invertarnos el resultado y si tenemos suerte acertaremos',
               'Mirar la hoja de tu compañero',
               'Sumar o Restar dependiendo de sus simbolos los numeros enteros con las letras',
               correct('Separar numeros enteros a un lado de la ecuacion y separar las incognitas al lado opuesto'),
               "I don't know"],
      lesson: '1.1'},

    {questionHTML: 'Soluciona esta ecuacion de Primer Grado: 2x+2=4x-6',
     choices: ['7x', '3', correct('4'), '2+3x', 'I don\'t know'],
      lesson: '1.1'},

  ],

  // The assessmentName key is deprecated in v1.3 of Course Builder, and no
  // longer used. The assessment name should be set in the unit.csv file or via
  // the course editor interface.
  assessmentName: 'Fin', // unique name submitted along with all of the answers

  checkAnswers: true     // render a "Check your Answers" button to allow students to check answers prior to submitting?
}

