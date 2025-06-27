@echo off
echo 🚀 Pre-push hook running...

:: Block push if any file contains "BLOCK"
findstr /S /I "BLOCK" *.txt >nul 2>&1
if %ERRORLEVEL% EQU 0 (
    echo ❌ 'BLOCK' found in .txt files. Push cancelled.
    exit /b 1
)

echo ✅ All checks passed. Push allowed.
exit /b 0