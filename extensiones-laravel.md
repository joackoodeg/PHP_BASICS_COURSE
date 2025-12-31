# Extensiones Recomendadas para PHP y Laravel en VS Code

## 🎯 Extensiones MÍNIMAS Esenciales (Detección de Errores)

### 1. **PHP Intelephense** ⭐ OBLIGATORIO
- **ID**: `bmewburn.vscode-intelephense-client`
- **Descripción**: IntelliSense avanzado para PHP + **DETECCIÓN DE ERRORES EN LÍNEA**
- **Funciones**: 
  - ✅ **Muestra errores de sintaxis en tiempo real**
  - ✅ **Subraya errores con líneas rojas**
  - ✅ Autocomplete inteligente
  - ✅ Definiciones y referencias
  - ✅ Detecta funciones/clases inexistentes
  - ✅ Validación de tipos

### 2. **Error Lens** ⭐ ALTAMENTE RECOMENDADO
- **ID**: `usernamehw.errorlens`
- **Descripción**: **Muestra errores y warnings INLINE directamente en el código**
- **Funciones**:
  - ✅ **Errores visibles en la misma línea del código**
  - ✅ Resalta toda la línea con error
  - ✅ No necesitas abrir el panel de problemas
  - ✅ Funciona con Intelephense y otros linters

### 3. **Laravel Blade Snippets**
- **ID**: `onecentlin.laravel-blade`
- **Descripción**: Snippets y resaltado de sintaxis para plantillas Blade
- **Funciones**: Sintaxis highlighting, snippets de directivas Blade

### 4. **Laravel Extra Intellisense**
- **ID**: `amiralizadeh9480.laravel-extra-intellisense`
- **Descripción**: IntelliSense mejorado para proyectos Laravel
- **Funciones**: Autocompletado para rutas, vistas, configuraciones, validaciones

---

## 🔧 Extensiones Complementarias (Opcionales)

### **Laravel Snippets**
- **ID**: `onecentlin.laravel5-snippets`
- **Descripción**: Snippets para Laravel (soporta Laravel 5+)
- **Funciones**: Snippets para rutas, controladores, modelos, migraciones, etc.

### **Laravel Artisan**
- **ID**: `ryannaddy.laravel-artisan`
- **Descripción**: Ejecutar comandos Artisan desde VS Code
- **Funciones**: Comandos Artisan integrados, soporte para Docker y WSL

### **Laravel Blade Formatter**
- **ID**: `shufo.vscode-blade-formatter`
- **Descripción**: Formateador de código para archivos Blade
- **Funciones**: Formato automático de archivos .blade.php

### **Laravel Goto View**
- **ID**: `codingyu.laravel-goto-view`
- **Descripción**: Navegación rápida a vistas
- **Funciones**: Ctrl+click en nombres de vistas para abrirlas

### **PHP Debug**
- **ID**: `xdebug.php-debug`
- **Descripción**: Soporte de depuración para PHP con Xdebug
- **Funciones**: Breakpoints, step debugging, inspección de variables

## Extensiones Complementarias

### **Composer**
- **ID**: `devsense.composer-php-vscode`
- **Descripción**: Integración completa de Composer
- **Funciones**: Gestión de dependencias, comandos, validación de composer.json

### **Laravel Goto Components**
- **ID**: `naoray.laravel-goto-components`
- **Descripción**: Navegación rápida a componentes Blade
- **Funciones**: Saltar a definición de componentes

### **Prettier - Code Formatter**
- **ID**: `esbenp.prettier-vscode`
- **Descripción**: Formateador de código universal
- **Funciones**: Formato para PHP, JavaScript, CSS, HTML, JSON, etc.

### **PHP Extension Pack**
- **ID**: `xdebug.php-pack`
- **Descripción**: Pack con todo lo necesario para desarrollo PHP
- **Funciones**: Conjunto de extensiones PHP populares

## Extension Packs (Todo en Uno)

### **Laravel Extension Pack**
- **ID**: `onecentlin.laravel-extension-pack`
- **Descripción**: Colección de extensiones para desarrollo Laravel
- **Incluye**: Blade snippets, Laravel snippets, Artisan, y más

### **Better Laravel Extension Pack**
- **ID**: `arifbudimanar.better-laravel-extension-pack`
- **Descripción**: Pack completo para desarrollo Laravel moderno
- **Incluye**: Intelephense, Pest, Pint, Tailwind CSS, y más

## 🚀 Instalación Rápida (MÍNIMO)

### ⚡ Solo lo esencial para ver errores:
```bash
# Las 2 extensiones MÁS IMPORTANTES para detección de errores
code --install-extension bmewburn.vscode-intelephense-client
code --install-extension usernamehw.errorlens

# Soporte básico Laravel
code --install-extension onecentlin.laravel-blade
code --install-extension amiralizadeh9480.laravel-extra-intellisense
```

### 📦 Instalación Completa (Todas las recomendadas):
```bash
code --install-extension bmewburn.vscode-intelephense-client
code --install-extension usernamehw.errorlens
code --install-extension onecentlin.laravel-blade
code --install-extension amiralizadeh9480.laravel-extra-intellisense
code --install-extension onecentlin.laravel5-snippets
code --install-extension ryannaddy.laravel-artisan
code --install-extension shufo.vscode-blade-formatter
code --install-extension codingyu.laravel-goto-view
## ⚙️ Configuración Recomendada

Agrega esto a tu `settings.json` de VS Code (`Ctrl+Shift+P` → "Preferences: Open User Settings (JSON)"):

```json
{
  // ===== INTELEPHENSE (Detección de errores PHP) =====
  "intelephense.files.associations": ["*.php", "*.phtml"],
  "intelephense.files.exclude": [
    "**/.git/**",
    "**/node_modules/**",
    "**/vendor/**/{Tests,tests}/**"
  ],
  "intelephense.diagnostics.enable": true,
  "intelephense.diagnostics.run": "onType",
  
  // ===== ERROR LENS (Errores inline) =====
  "errorLens.enabled": true,
  "errorLens.enabledDiagnosticLevels": ["error", "warning", "info"],
  "errorLens.fontStyleItalic": true,
  "errorLens.gutterIconsEnabled": true,
  
  // ===== BLADE =====
  "blade.format.enable": true,
  "[blade]": {
    "editor.defaultFormatter": "shufo.vscode-blade-formatter",
    "editor.formatOnSave": true
  },
  
  // ===== PHP =====
  "[php]": {
    "editor.defaultFormatter": "bmewburn.vscode-intelephense-client",
    "editor.formatOnSave": true
  },
  
  // ===== ASOCIACIONES DE ARCHIVOS =====
  "files.associations": {
    "*.blade.php": "blade"
  },
## 💡 Notas Importantes

### ¿Cómo funcionan los errores en línea?
1. **Intelephense** analiza tu código PHP y detecta errores de sintaxis, tipos, funciones inexistentes, etc.
2. **Error Lens** toma esos errores y los muestra directamente en la línea de código (no solo en el panel de problemas)
3. Verás los errores **inmediatamente** mientras escribes

### Tipos de errores que detecta:
- ❌ Errores de sintaxis PHP
- ❌ Variables no definidas
- ❌ Funciones/clases inexistentes
- ❌ Errores de tipo (type hints incorrectos)
- ⚠️ Warnings (código sospechoso pero válido)
- 💡 Sugerencias de mejora

### Consejos:
- **Intelephense** es superior al validador PHP integrado de VS Code (desactívalo con `"php.validate.enable": false`)
- **Error Lens** funciona con cualquier lenguaje, no solo PHP
- Para depuración avanzada, necesitas configurar **Xdebug** en tu servidor XAMPP/LAMPP
- **Laravel Extra Intellisense** requiere que estés en la carpeta raíz del proyecto Laravel

---

**Última actualización**: Diciembre 2025
**Autor**: Configuración mínima optimizada para desarrollo PHP/Laravel
  }
}
```

## Notas Adicionales

- **Intelephense** es preferible sobre el soporte básico de PHP de VS Code
- Para depuración, necesitas configurar **Xdebug** en tu entorno PHP
- **Laravel Extra Intellisense** requiere que tu proyecto Laravel esté correctamente configurado
- Considera usar **Pest** para testing si estás en proyectos modernos de Laravel

---

**Última actualización**: Diciembre 2025
