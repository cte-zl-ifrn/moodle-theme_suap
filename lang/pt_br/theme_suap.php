<?php
// Every file should have GPL and copyright in the header - we skip it in tutorials but you should not skip it for real.

// This line protects the file from being accessed by a URL directly.                                                               
defined('MOODLE_INTERNAL') || die();                                                                                                
                                                                                                                                    
// A description shown in the admin theme selector.                                                                                 
$string['choosereadme'] = 'O tema SUAP é um tema filho do tema Boost';                
// The name of our plugin.                                                                                                          
$string['pluginname'] = 'SUAP';                                                                                                    
// We need to include a lang string for each block region.                                                                          
$string['region-side-pre'] = 'Direita';
// The name of the second tab in the theme settings.                                                                                
$string['advancedsettings'] = 'Configurações avançadas';                                                                                  
// The brand colour setting.                                                                                                        
$string['brandcolor'] = 'Cor da marca';                                                                                             
// The brand colour setting description.                                                                                            
$string['brandcolor_desc'] = 'Cor de destaque';     
// A description shown in the admin theme selector.                                                                                                                                                                                    
$string['configtitle'] = 'Configurações do tema SUAP';                                                                                          
// Name of the first settings tab.                                                                                                  
$string['generalsettings'] = 'Configurações gerais';                                                                                                                                                                                    
// Preset files setting.                                                                                                            
$string['presetfiles'] = 'Arquivos adicionais de predefinição de tema';                                                                           
// Preset files help text.                                                                                                          
$string['presetfiles_desc'] = 'Arquivos predefinidos podem ser usados ​​para alterar drasticamente a aparência do tema. Consulte <a href=https://docs.moodle.org/dev/Boost_Presets>Predefinições de Boost</a> para obter informações sobre como criar e compartilhar seus próprios arquivos predefinidos e consulte <a href=http://moodle.net/boost>Repositório de predefinições</a> para predefinições que outras pessoas compartilharam.';
// Preset setting.                                                                                                                  
$string['preset'] = 'Tema predefinido';                                                                                                 
// Preset help text.                                                                                                                
$string['preset_desc'] = 'Escolha uma predefinição para alterar amplamente a aparência do tema';                                                  
// Raw SCSS setting.                                                                                                                
$string['rawscss'] = 'SCSS bruto';                                                                                                    
// Raw SCSS setting help text.                                                                                                      
$string['rawscss_desc'] = 'Use este campo para fornecer o código SCSS ou CSS que será injetado no final do style sheet';       
// Raw initial SCSS setting.                                                                                                        
$string['rawscsspre'] = 'SCSS inicial bruto';                                                                                         
// Raw initial SCSS setting help text.                                                                                              
$string['rawscsspre_desc'] = 'Neste campo você pode fornecer o código SCSS de inicialização, ele será injetado antes de tudo. Na maioria das vezes você usará esta configuração para definir variáveis';

// Drawers aditional strings 
$string['drawer_course_index'] = "Índice da disciplina";
$string['drawer_blocks'] = "Gaveta de Blocos";
$string['drawer_user'] = "Menu do usuário";
$string['allconversations'] = "todas";
$string['unreadmessages'] = "Não lidas";

// Frontpage aditional strings 
$string['filter'] = 'Filtros';
$string['workload'] = 'Carga horária';
$string['certificate'] = 'Certificado';
$string['pt-br'] = 'Português';
$string['es'] = 'Espanhol';
$string['upto_hours'] = 'Até {$a} horas';

// frontpage-settings.php
$string['frontpagesettings'] = 'Configurações da página inicial';
$string['frontpage_title'] = 'Título da página inicial';
$string['frontpage_title_desc'] = '';
$string['frontpage_buttons_configtextarea'] = 'Configuração dos botões da página inicial';
$string['frontpage_buttons_configtextarea_desc'] = 'Apague o trecho (/n) e pressione "Enter" para aplicar a quebra de linha';
$string['frontpage_button_home'] = 'Início';
$string['frontpage_button_about'] = 'Sobre';
$string['hero_title'] = 'Título da seção de destaque';
$string['hero_title_desc'] = '';
$string['hero_subtitle'] = 'Subtítulo da seção de destaque';
$string['hero_subtitle_desc'] = '';
$string['hero_first_column_number'] = 'Número da primeira coluna da seção de destaque';
$string['hero_first_column_number_desc'] = '';
$string['hero_first_column_description'] = 'Descrição da primeira coluna da seção de destaque';
$string['hero_first_column_text'] = 'Texto da primeira coluna da seção de destaque';
$string['hero_first_column_text_desc'] = '';
$string['hero_second_column_number'] = 'Número da segunda coluna da seção de destaque';
$string['hero_second_column_number_desc'] = '';
$string['hero_second_column_description'] = 'Descrição da segunda coluna da seção de destaque';
$string['hero_second_column_description_desc'] = '';
$string['hero_second_column_text'] = 'Texto da segunda coluna da seção de destaque';
$string['hero_second_column_text_desc'] = '';
$string['hero_third_column_number'] = 'Número da terceira coluna da seção de destaque';
$string['hero_third_column_number_desc'] = '';
$string['hero_third_column_description'] = 'Descrição da terceira coluna da seção de destaque';
$string['hero_third_column_description_desc'] = '';
$string['hero_third_column_text'] = 'Texto da terceira coluna da seção de destaque';
$string['hero_third_column_text_desc'] = '';
$string['hero_fourth_column_number'] = 'Número da quarta coluna da seção de destaque';
$string['hero_fourth_column_number_desc'] = '';
$string['hero_fourth_column_description'] = 'Descrição da quarta coluna da seção de destaque';
$string['hero_fourth_column_description_desc'] = '';
$string['hero_fourth_column_text'] = 'Texto da quarta coluna da seção de destaque';
$string['hero_fourth_column_text_desc'] = '';
$string['hero_button_text'] = 'Texto do botão da seção de destaque';
$string['hero_button_text_desc'] = '';

$string['hero_configtextarea_test'] = 'Texto do botão da seção de destaque';
$string['hero_configtextarea_test_desc'] = '';

$string['pagination_secret'] = 'Segredo de paginação';
$string['pagination_secret_desc'] = 'É necessário criar um token na seção de web services do Moodle para dispositivos móveis';

$string['frontpage_main_courses_title'] = 'Título da seção de cursos da página inicial';
$string['frontpage_main_courses_title_desc'] = '';
$string['frontpage_buttons_configtextarea_when_user_logged'] = 'Configuração dos botões da página inicial quando o usuário está logado';
$string['frontpage_buttons_configtextarea_when_user_logged_desc'] = 'Apague o trecho (/n) e pressione "Enter" para aplicar a quebra de linha';
$string['frontpage_button_courses'] = 'Cursos';
$string['frontpage_button_courses_desc'] = '';
$string['frontpage_button_learningpaths'] = 'Trilhas';
$string['frontpage_button_learningpaths_desc'] = '';

// Configurações do rodapé.
$string['footer_title'] = 'Título do rodapé';
$string['footer_title_desc'] = 'Título principal exibido no rodapé.';

$string['footer_support_button'] = 'Botão de suporte';
$string['footer_support_button_desc'] = 'Texto do botão de suporte exibido no rodapé.';
$string['footer_support_button_url'] = 'Link para o botão de suporte';
$string['footer_support_button_url_desc'] = '';

$string['footer_social_media_text'] = 'Texto das redes sociais';
$string['footer_social_media_text_desc'] = 'Texto sobre as redes sociais do IFRN ZL no rodapé.';
$string['footer_social_media_facebook'] = 'Facebook URL';
$string['footer_social_media_facebook_desc'] = '';
$string['footer_social_media_instagram'] = 'Instagram URL';
$string['footer_social_media_instagram_desc'] = '';
$string['footer_social_media_youtube'] = 'Youtube URL';
$string['footer_social_media_youtube_desc'] = '';

// Mapa do rodapé - primeira coluna.
$string['footer_map_first_column_title'] = 'Título da primeira coluna';
$string['footer_map_first_column_title_desc'] = 'Título da primeira coluna do rodapé.';

$string['footer_map_first_column_first_line'] = 'Primeira coluna - linha 1';
$string['footer_map_first_column_first_line_desc'] = 'Primeiro item da primeira coluna.';

$string['footer_map_first_column_second_line'] = 'Primeira coluna - linha 2';
$string['footer_map_first_column_second_line_desc'] = 'Segundo item da primeira coluna.';

$string['footer_map_first_column_third_line'] = 'Primeira coluna - linha 3';
$string['footer_map_first_column_third_line_desc'] = 'Terceiro item da primeira coluna.';

$string['footer_map_first_column_fourth_line'] = 'Primeira coluna - linha 4';
$string['footer_map_first_column_fourth_line_desc'] = 'Quarto item da primeira coluna.';

// Mapa do rodapé - segunda coluna.
$string['footer_map_second_column_title'] = 'Título da segunda coluna';
$string['footer_map_second_column_title_desc'] = 'Título da segunda coluna do rodapé.';

$string['footer_map_second_column_first_line'] = 'Segunda coluna - linha 1';
$string['footer_map_second_column_first_line_desc'] = 'Primeiro item da segunda coluna.';

$string['footer_map_second_column_second_line'] = 'Segunda coluna - linha 2';
$string['footer_map_second_column_second_line_desc'] = 'Segundo item da segunda coluna.';

$string['footer_map_second_column_third_line'] = 'Segunda coluna - linha 3';
$string['footer_map_second_column_third_line_desc'] = 'Terceiro item da segunda coluna.';

$string['footer_map_second_column_fourth_line'] = 'Segunda coluna - linha 4';
$string['footer_map_second_column_fourth_line_desc'] = 'Quarto item da segunda coluna.';

// Mapa do rodapé - terceira coluna.
$string['footer_map_third_column_title'] = 'Título da terceira coluna';
$string['footer_map_third_column_title_desc'] = 'Título da terceira coluna do rodapé.';

$string['footer_map_third_column_first_line'] = 'Terceira coluna - linha 1';
$string['footer_map_third_column_first_line_desc'] = 'Primeiro item da terceira coluna.';

$string['footer_map_third_column_second_line'] = 'Terceira coluna - linha 2';
$string['footer_map_third_column_second_line_desc'] = 'Segundo item da terceira coluna.';

$string['footer_map_third_column_third_line'] = 'Terceira coluna - linha 3';
$string['footer_map_third_column_third_line_desc'] = 'Terceiro item da terceira coluna.';

$string['footer_map_third_column_fourth_line'] = 'Terceira coluna - linha 4';
$string['footer_map_third_column_fourth_line_desc'] = 'Quarto item da terceira coluna.';

// Créditos do rodapé.
$string['footer_credits_text'] = 'Texto dos créditos';
$string['footer_credits_text_desc'] = 'Texto exibido nos créditos do rodapé.';

$string['footer_credits_first_link'] = 'Primeiro link dos créditos';
$string['footer_credits_first_link_desc'] = '';
$string['footer_credits_first_link_url'] = 'URL do primeiro link dos créditos';
$string['footer_credits_first_link_url_desc'] = '';
$string['footer_credits_first_link_new_window'] = 'Abrir nova aba no primeiro link';
$string['footer_credits_first_link_new_window_desc'] = '';

$string['footer_credits_second_link'] = 'Segundo link dos créditos';
$string['footer_credits_second_link_desc'] = '';
$string['footer_credits_second_link_url'] = 'URL do segundo link dos créditos';
$string['footer_credits_second_link_url_desc'] = '';
$string['footer_credits_second_link_new_window'] = 'Abrir nova aba no segundo link';
$string['footer_credits_second_link_new_window_desc'] = '';

// Incourse aditional strings
$string['contentbutton'] = 'Conteúdo';

// Profile aditional strings
$string['aboutme'] = 'Sobre mim';
$string['certificates'] = 'Certificados';
$string['describe_yourself'] = 'Se descreva para a sua comunidade';
$string['no_your_certificates'] = 'Conclua algum curso para obter certificados';
$string['no_your_badges'] = 'Explore os nossos cursos para obter emblemas';
$string['no_description'] = 'Sem descrição por enquanto';
$string['no_certificates'] = 'Sem certificados';
$string['no_badges'] = 'Nenhum emblema para ser exibido';

// Enrolment aditional strings
$string['issue_certificate'] = 'Emitir certificado';
$string['login'] = 'Realizar login';
$string['no_description_course'] = 'Sem descrição do curso por enquanto'; 
$string['overview'] = 'Visão geral';
$string['instructor'] = 'Docente';
$string['instructors'] = 'Docentes';
$string['comments'] = 'Comentários';
$string['no_description_instructor'] = 'Sem descrição do docente';

// Setting layout navigation menu
$string['layouttype'] = 'Sempre mostrar o menu superior';
$string['layouttype_desc'] = 'O menu superior é usado nos Moodles que não estão integrados ao Painel AVA';
