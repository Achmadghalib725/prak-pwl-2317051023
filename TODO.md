# TODO: Fix Laravel Code Issues

## 1. Fix UserController store method ✅
- Change 'npm' to 'nim' in UserController.php store method to match migration column name.

## 2. Fix create_user.blade.php ✅
- Change input name and label from 'npm' to 'nim'.

## 3. Fix list_user.blade.php ✅
- Change $user->nama_kelas to $user->kelas->nama_kelas to access related kelas name.

## 4. Fix Kelas.php model ✅
- Change 'hasmany' to 'hasMany' in Kelas.php model.
